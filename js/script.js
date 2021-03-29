const blobs = document.querySelectorAll(".blob svg");
// console.log(blobs);

const transformBlob = () => {
    var s1, s2, rot;
    s1 = Math.random() * (1.3 - 0.7) + 0.7;
    s2 = Math.random() * (1.3 - 0.7) + 0.7;
    rot = Math.floor(Math.random() * 100) - 50;

    return [s1, s2, rot];
};

let iQ = setInterval(()=> {

    for (var i = 0; i < blobs.length; i++) {
        var vals = transformBlob();
        var s1 = vals[0];
        var s2 = vals[1];
        var rot = vals[2];
        // console.log(s1, s2, rot);
        // console.log(blobs[i]);
        blobs[i].style.transform = `scale(${s1} ${s2})`;
        blobs[i].style.transform = `rotate(${rot}deg)`;
    }



}, 2000);
