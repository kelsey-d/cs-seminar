create database tax;

create table TaxInfo(
	ID int,
	STATES TEXT,
	BUDGET DECIMAL(10,2),
	PENSION DECIMAL(10,2),
	HEALTHCARE DECIMAL(10,2),
	DEFENSE DECIMAL(10,2),
	EDUCATION DECIMAL(10,2),
	TRANSPORT DECIMAL(10,2),
	WELFARE DECIMAL(10,2)
);

\copy TaxInfo FROM 'C:\Users\spong\Desktop\Tax Allocations\States_Resorted_information.csv' DELIMITER ',' CSV HEADER;


--------- STATES ----------

-- ALABAMA -- 
SELECT * FROM TaxInfo
WHERE id = 1; 
	-- total
SELECT BUDGET from TaxInfo
WHERE id = 1;

-- ALASKA ---
SELECT * FROM TaxInfo
WHERE ID = 2;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 2;

-- ARIZONA --
SELECT * FROM TaxInfo
WHERE ID = 3;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 3;

-- ARKANSAS --
SELECT * FROM TaxInfo
WHERE ID = 4;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 4;

--CALIFORNIA --
SELECT * FROM TaxInfo
WHERE ID = 5;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 5; 

-- COLORADO --
SELECT * FROM TaxInfo
WHERE ID = 6;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 6;

-- CONNETICUT -- 
SELECT * FROM TaxInfo
WHERE ID = 7;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 7;

-- DELAWARE -- 
SELECT * FROM TaxInfo
WHERE ID = 8;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 8;

-- FLORIDA -- 
SELECT * FROM TaxInfo
WHERE ID = 9;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 9;

-- GEORGIA --
SELECT * FROM TaxInfo
WHERE ID = 10;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 10;

-- HAWAII --
SELECT * FROM TaxInfo
WHERE ID = 11;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 11;

-- IDAHO --
SELECT * FROM TaxInfo
WHERE ID = 12;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 12;

-- ILLINOIS --
SELECT * FROM TaxInfo
WHERE ID = 13;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 13;

-- INDIANA --
SELECT * FROM TaxInfo
WHERE ID = 14;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 14;

-- IOWA --
SELECT * FROM TaxInfo
WHERE ID = 15;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 15;

-- KANSAS --
SELECT * FROM TaxInfo
WHERE ID = 16;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 16;

-- KENTUCKY --
SELECT * FROM TaxInfo
WHERE ID = 17;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 17;

-- LOUISANA --
SELECT * FROM TaxInfo
WHERE ID = 18;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 18;

-- MAINE --
SELECT * FROM TaxInfo
WHERE ID = 19;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 19;

-- MARYLAND --
SELECT * FROM TaxInfo
WHERE ID = 20;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 20;

-- MASSACHUSETTES --
SELECT * FROM TaxInfo
WHERE ID = 21;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 21;

-- MICHIGAN --
SELECT * FROM TaxInfo
WHERE ID = 22;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 22; 

-- MINNESOTA --
SELECT * FROM TaxInfo
WHERE ID = 23;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 23;

-- MISSISSIPPI --
SELECT * FROM TaxInfo
WHERE ID = 24;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 24;

-- MISSOURI --
SELECT * FROM TaxInfo
WHERE ID = 25;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 25;

-- MONTANA --
SELECT * FROM TaxInfo
WHERE ID = 26;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 26;

-- NEBRASKA --
SELECT * FROM TaxInfo
WHERE ID = 27;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 27;

-- NEVADA -- 
SELECT * FROM TaxInfo
WHERE ID = 28;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 28;

-- NEW HEMPHSIRE --
SELECT * FROM TaxInfo
WHERE ID = 29;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 29;

-- NEW JERSEY -- 
SELECT * FROM TaxInfo
WHERE ID = 30;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 30;

-- NEW MEXICO -- 
SELECT * FROM TaxInfo
WHERE ID = 31;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 31;

-- NEW YORK --
SELECT * FROM TaxInfo
WHERE ID = 32;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 32;

-- NORTH CAROLINA --
SELECT * FROM TaxInfo
WHERE ID = 33;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 33;

-- NORTH DAKOTA --
SELECT * FROM TaxInfo
WHERE ID = 34;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 34;

-- OHIO --
SELECT * FROM TaxInfo
WHERE ID = 35;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 35;

-- OKLAHOMA --
SELECT * FROM TaxInfo
WHERE ID = 36;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 36;

-- OREGON --
SELECT * FROM TaxInfo
WHERE ID = 37;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 37;

-- PENNSYLVANIA --
SELECT * FROM TaxInfo
WHERE ID = 38;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 38;

-- RHODE ISLAND --
SELECT * FROM TaxInfo
WHERE ID = 39;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 39;

-- SOUTH CAROLINA --
SELECT * FROM TaxInfo
WHERE ID = 40;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 40;

-- SOUTH DAKOTA --
SELECT * FROM TaxInfo
WHERE ID = 41;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 41;

-- TENNESSEE --
SELECT * FROM TaxInfo
WHERE ID = 42;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 42;

-- TEXAS --
SELECT * FROM TaxInfo
WHERE ID = 43;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 43;

-- UTAH --
SELECT * FROM TaxInfo
WHERE ID = 44;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 44;

-- VERMONT --
SELECT * FROM TaxInfo
WHERE ID = 45;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 45;

-- VIRGINIA --
SELECT * FROM TaxInfo
WHERE ID = 46;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 46;

-- WASHINGTON --
SELECT * FROM TaxInfo
WHERE ID = 47;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 47; 

-- WEST VIRGINIA --
SELECT * FROM TaxInfo
WHERE ID = 48;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 48;

-- WISCONSIN --
SELECT * FROM TaxInfo
WHERE ID = 49;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 49;

-- WYOMING --
SELECT * FROM TaxInfo
WHERE ID = 50;
	--total--
SELECT BUDGET FROM TaxInfo
WHERE ID = 50;



-------- AVERAGE -------
SELECT CAST(AVG(BUDGET) AS DECIMAL(10,2))
FROM TaxInfo;

-- showing BUDGET higher than AVG in order
SELECT STATES, BUDGET AS Highest_Budget
FROM TaxInfo
GROUP BY STATES, BUDGET
HAVING AVG(BUDGET) >= 32963.39
ORDER BY BUDGET DESC;	-- ASC = low to high

-- PENSIOn in order
SELECT STATES, PENSION from TaxInfo
order by PENSION DESC;

-- healthcare
SELECT STATES, HEALTHCARE from TaxInfo
order by HEALTHCARE DESC;

--defense
SELECT STATES, DEFENSE from TaxInfo
order by DEFENSE DESC;

--education
SELECT STATES, EDUCATION from TaxInfo
order by EDUCATION DESC;

--transport 
SELECT STATES, TRANSPORT from TaxInfo
order by TRANSPORT DESC;

--welfare
SELECT STATES, WELFARE from TaxInfo
order by WELFARE DESC;

-- states with any category less than or = to 1m
SELECT * from TaxInfo
where PENSION <= 1 OR
	HEALTHCARE <= 1 OR
	DEFENSE <= 1 OR
	EDUCATION <= 1 OR
	TRANSPORT <= 1 OR
	WELFARE <= 1
;






