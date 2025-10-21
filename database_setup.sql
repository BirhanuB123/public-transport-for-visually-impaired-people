-- Database setup for Public Transport Information System
-- Create database
CREATE DATABASE IF NOT EXISTS publictransport;
USE publictransport;

-- Bus Assignment Table
CREATE TABLE IF NOT EXISTS busassignment (
    BusId VARCHAR(20) PRIMARY KEY,
    RoutNumber VARCHAR(20) NOT NULL,
    CurrentStation VARCHAR(100) NOT NULL
);

-- Station Information Table
CREATE TABLE IF NOT EXISTS station_information_table (
    Station_Id VARCHAR(20) PRIMARY KEY,
    Station_Name VARCHAR(100) NOT NULL,
    Latitude DECIMAL(10, 8) NOT NULL,
    Longitude DECIMAL(11, 8) NOT NULL
);

-- Routing Table
CREATE TABLE IF NOT EXISTS routing_table (
    Route_number VARCHAR(20) NOT NULL,
    Path_id VARCHAR(20) NOT NULL,
    Station_id VARCHAR(20) NOT NULL,
    PRIMARY KEY (Route_number, Path_id, Station_id)
);

-- Time Table
CREATE TABLE IF NOT EXISTS time_table (
    Time_id INT AUTO_INCREMENT PRIMARY KEY,
    Route_number VARCHAR(20) NOT NULL,
    Station_id VARCHAR(20) NOT NULL,
    Arrival_time TIME NOT NULL,
    Departure_time TIME NOT NULL,
    Day_of_week VARCHAR(20) NOT NULL
);

-- Sample data for testing
INSERT INTO station_information_table (Station_Id, Station_Name, Latitude, Longitude) VALUES
('ST001', 'Central Station', 6.9271, 79.8612),
('ST002', 'Fort Station', 6.9344, 79.8428),
('ST003', 'Bambalapitiya Station', 6.8867, 79.8553),
('ST004', 'Kollupitiya Station', 6.9147, 79.8501)
ON DUPLICATE KEY UPDATE Station_Id=Station_Id;

INSERT INTO busassignment (BusId, RoutNumber, CurrentStation) VALUES
('BUS001', 'R001', 'ST001'),
('BUS002', 'R001', 'ST002'),
('BUS003', 'R002', 'ST003')
ON DUPLICATE KEY UPDATE BusId=BusId;

INSERT INTO routing_table (Route_number, Path_id, Station_id) VALUES
('R001', 'P001', 'ST001'),
('R001', 'P002', 'ST002'),
('R001', 'P003', 'ST003'),
('R002', 'P001', 'ST002'),
('R002', 'P002', 'ST003'),
('R002', 'P003', 'ST004')
ON DUPLICATE KEY UPDATE Route_number=Route_number;

INSERT INTO time_table (Route_number, Station_id, Arrival_time, Departure_time, Day_of_week) VALUES
('R001', 'ST001', '08:00:00', '08:05:00', 'Monday'),
('R001', 'ST002', '08:15:00', '08:20:00', 'Monday'),
('R001', 'ST003', '08:30:00', '08:35:00', 'Monday'),
('R002', 'ST002', '09:00:00', '09:05:00', 'Monday'),
('R002', 'ST003', '09:15:00', '09:20:00', 'Monday'),
('R002', 'ST004', '09:30:00', '09:35:00', 'Monday')
ON DUPLICATE KEY UPDATE Time_id=Time_id;

