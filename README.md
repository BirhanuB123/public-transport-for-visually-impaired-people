# Public Transport Information System for Visually Impaired People

A PHP and MySQL-based web application designed to help visually impaired people access public transport information easily.

## Features

- **Bus Management**: Create, view, update, and delete bus assignments
- **Station Management**: Manage bus stations with GPS coordinates (latitude/longitude)
- **Route Management**: Define and manage bus routes through different stations
- **Time Schedule**: Manage time schedules for buses at different stations
- **Real-time Information**: Check when the next bus will arrive at a specific station

## System Requirements

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Apache/Nginx web server
- Web browser

## Installation Instructions

### 1. Database Setup

1. Start your MySQL server
2. Import the database schema:
   ```bash
   mysql -u root -p < database_setup.sql
   ```
   Or manually run the SQL file in phpMyAdmin

### 2. Configure Database Connection

The database configuration is already set in `config.php`:
- Host: localhost
- Username: root
- Password: (empty)
- Database: publictransport

If your MySQL credentials are different, edit `config.php` accordingly.

### 3. Deploy Application

1. Copy all files to your web server directory:
   - For XAMPP: `C:\xampp\htdocs\public-transport\`
   - For WAMP: `C:\wamp\www\public-transport\`

2. Access the application in your browser:
   ```
   http://localhost/public-transport/
   ```

## File Structure

```
public-transport/
├── index.php                       # Main application file
├── config.php                      # Database configuration
├── database_setup.sql              # Database schema and sample data
├── home.php / Home.php            # Homepage
├── trial.php / Trial.php          # Bus arrival request form
│
├── Bus Management/
│   ├── create_bus_table.php       # Form to create bus assignment
│   ├── view_bus_Table.php         # Display all buses
│   ├── update_bus_table.php       # Form to update bus
│   ├── delete_bus_table.php       # Form to delete bus
│   ├── savebusassignment.php      # Process bus creation
│   ├── Bus_update.php             # Process bus update
│   └── Bus_delete.php             # Process bus deletion
│
├── Station Management/
│   ├── create_station_table.php   # Form to create station
│   ├── view_station_table.php     # Display all stations
│   ├── update_station_table.php   # Form to update station
│   ├── delete_station_table.php   # Form to delete station
│   ├── savestationassaignment2.php # Process station creation
│   ├── Station_update.php         # Process station update
│   └── Station_delete.php         # Process station deletion
│
├── Route Management/
│   ├── create_routing_table.php   # Form to create route
│   ├── view_routing_table.php     # Display all routes
│   ├── update_routing_table.php   # Form to update route
│   ├── delete_routing_table.php   # Form to delete route
│   ├── saveroutingtable.php       # Process route creation
│   ├── routing_update.php         # Process route update
│   └── routing_delete.php         # Process route deletion
│
├── Time Table Management/
│   ├── create_time_table.php      # Form to create time entry
│   ├── view_time_table.php        # Display all time schedules
│   ├── update_time_table.php      # Form to update time entry
│   ├── delete_time_table.php      # Form to delete time entry
│   ├── savetimetable.php          # Process time entry creation
│   ├── time_update.php            # Process time entry update
│   └── time_delete.php            # Process time entry deletion
│
└── Real-time Features/
    └── time_left.php              # Calculate bus arrival time
```

## Database Tables

### 1. busassignment
- BusId (Primary Key)
- RoutNumber
- CurrentStation

### 2. station_information_table
- Station_Id (Primary Key)
- Station_Name
- Latitude
- Longitude

### 3. routing_table
- Route_number (Composite Primary Key)
- Path_id (Composite Primary Key)
- Station_id (Composite Primary Key)

### 4. time_table
- Time_id (Auto Increment Primary Key)
- Route_number
- Station_id
- Arrival_time
- Departure_time
- Day_of_week

## Usage Guide

### For Administrators:

1. **Manage Stations**: Add all bus stations with their GPS coordinates
2. **Create Routes**: Define routes and their paths through stations
3. **Assign Buses**: Assign bus IDs to routes
4. **Set Schedules**: Create time schedules for each route and station

### For Users (Visually Impaired):

1. Click on "Request_time" in the menu
2. Enter the route number
3. Enter the station ID
4. Click "Get Arrival Time"
5. The system will display when the next bus will arrive

## Sample Data

The system includes sample data:
- 4 bus stations in Colombo area
- 3 bus assignments
- 2 routes with multiple stops
- Sample time schedules for Monday

## Security Notes

⚠️ **Important**: This application was created for educational purposes. Before deploying to production:

1. Use prepared statements to prevent SQL injection
2. Add user authentication and authorization
3. Implement CSRF protection
4. Add input validation and sanitization
5. Use HTTPS for secure communication
6. Store database credentials securely (not in code)

## Future Enhancements

- Voice output for visually impaired users
- GPS tracking for real-time bus location
- Mobile application
- SMS notifications
- Multi-language support
- Accessibility features (screen reader compatible)

## Credits

Developed as a university project to help visually impaired people access public transport information.

## License

Educational project - Free to use and modify.

