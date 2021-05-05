  d3.csv("../States_Resorted_information.csv", function(err, data) {

    var config = {"id":"ID","stateDataColumn":"STATES","valueDataColumn":"BUDGET (m)"}
    
    var WIDTH = 1600, HEIGHT = 900;
    
    var SCALE = 1.5;
    
    var MAP_STATE = config.stateDataColumn;
    var MAP_VALUE = config.valueDataColumn;
    var ID = config.id;
    var width = WIDTH;
    var height = HEIGHT;
    
    var valueById = d3.map();
    
    var path = d3.geo.path();
    
    var svg = d3.select("#canvas-svg").append("svg")
        .attr("width", width)
        .attr("height", height);
    
    
    name_id_map = {};
    id_name_map = {};
    
    for (var i = 0; i < data.length; i++) {
      name_id_map[data[i].STATES] = data[i].ID;
      id_name_map[data[i].ID] = data[i].STATES;
    }
    data.forEach(function(d) {
      var id = name_id_map[d[MAP_STATE]];
      valueById.set(id, d[MAP_STATE]); 
    });
    
    d3.json("js/states-map.json", function(error, us) {
      
      svg.append("g")
         .attr("class", "states-choropleth")
        	.selectAll("path")
         .data(topojson.feature(us, us.objects.states).features)
        	.enter().append("path")
         .attr("transform", "scale(" + SCALE + ")")
         .style("fill", "black")
         .style("stroke", "black")         	
         .attr("d", path)
          .on("mousemove", function(d) {
              var html = "";
    				  
              html += "<div class=\"tooltip_kv\">";
              html += "<span class=\"tooltip_key\">";
              html += (valueById.get(d.id));
              html += "</span>";
              html += "<span class=\"tooltip_value\">";
              // html += (valueById.get(d.id));
              html += "</span>";
              html += "</div>";
              
              $("#tooltip-container").html(html);
              $(this).css("fill", "#E6E6FA");
              $("#tooltip-container").show();
              
              var coordinates = d3.mouse(this);
              
              var map_width = $('.states-choropleth')[0].getBoundingClientRect().width;
              
              if (d3.event.layerX < map_width / 2) {
                d3.select("#tooltip-container")
                  .style("top", (d3.event.layerY + 15) + "px")
                  .style("left", (d3.event.layerX + 15) + "px");
              } else {
                var tooltip_width = $("#tooltip-container").width();
                d3.select("#tooltip-container")
                  .style("top", (d3.event.layerY + 15) + "px")
                  .style("left", (d3.event.layerX - tooltip_width - 30) + "px");
              }

              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                      document.getElementsByClassName("tooltip_value")[0].innerHTML = "$"+this.responseText +"M";
                  }
              };
              xmlhttp.open("POST","index.php",true);
              xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xmlhttp.send("id="+d.id);
          })
          .on("mouseout", function() {
                  $(this).css("fill", "black");
                  $("#tooltip-container").hide();
              })
          .on("click", function(d) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
              } else {
                  // code for IE6, IE5
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    // document.getElementsByTagName("html").innerHTML = this.responseText;
                     document.write(this.responseText);
                  }
              };
              xmlhttp.open("POST","state.php",true);
              xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xmlhttp.send("id="+d.id);
          })
    
      svg.append("path")
          .datum(topojson.mesh(us, us.objects.states, function(a, b) { return a !== b; }))
          .attr("class", "states")
          .attr("transform", "scale(" + SCALE + ")")
          .attr("d", path);
    });
    
    });