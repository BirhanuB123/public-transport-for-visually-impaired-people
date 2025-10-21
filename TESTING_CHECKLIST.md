# Testing Checklist ✅

Use this checklist to verify all features are working correctly.

---

## 🔧 Setup Verification

- [ ] XAMPP/WAMP installed
- [ ] Apache server started
- [ ] MySQL server started
- [ ] Database "publictransport" created
- [ ] All tables imported successfully
- [ ] Files copied to htdocs/www folder
- [ ] Application accessible at http://localhost/public-transport/

---

## 🏠 Homepage Testing

- [ ] Navigate to http://localhost/public-transport/
- [ ] Homepage loads without errors
- [ ] Navigation menu displays
- [ ] All menu items visible (Home, Bus_table, Station_table, Routing_table, Time_table, Request_time)
- [ ] Dropdowns work on hover
- [ ] Welcome message displays
- [ ] Image loads (if available)

---

## 🚌 Bus Assignment Testing

### View
- [ ] Click: Bus_table → View
- [ ] Sample buses display (BUS001, BUS002, BUS003)
- [ ] All columns show: BusId, RoutNumber, CurrentStation
- [ ] No errors displayed

### Create
- [ ] Click: Bus_table → Create
- [ ] Form displays with 3 fields
- [ ] Enter: Bus ID = "BUS004", Route = "R001", Station = "ST004"
- [ ] Click Submit
- [ ] Success message appears
- [ ] Redirects to view page
- [ ] New bus appears in list

### Update
- [ ] Click: Bus_table → Update
- [ ] Form displays with 3 fields
- [ ] Enter: Bus ID = "BUS004", Route = "R002", Station = "ST001"
- [ ] Click Submit/Update
- [ ] Success message appears
- [ ] Changes reflected in view page

### Delete
- [ ] Click: Bus_table → Delete
- [ ] Form displays with 1 field
- [ ] Enter: Bus ID = "BUS004"
- [ ] Click Delete/Submit
- [ ] Success message appears
- [ ] Bus removed from view page

---

## 📍 Station Testing

### View
- [ ] Click: Station_table → View
- [ ] Sample stations display (ST001-ST004)
- [ ] All columns show: Station_Id, Station_Name, Latitude, Longitude
- [ ] GPS coordinates display correctly

### Create
- [ ] Click: Station_table → Create
- [ ] Form displays with 4 fields
- [ ] Enter test station data
- [ ] Click Submit
- [ ] Success message appears
- [ ] New station appears in list

### Update
- [ ] Click: Station_table → Update
- [ ] Form displays with 4 fields
- [ ] Enter station ID and new data
- [ ] Click Submit/Update
- [ ] Success message appears
- [ ] Changes saved

### Delete
- [ ] Click: Station_table → Delete
- [ ] Form displays
- [ ] Enter station ID
- [ ] Click Delete
- [ ] Success message appears
- [ ] Station removed

---

## 🗺️ Routing Testing

### View
- [ ] Click: Routing_table → View
- [ ] Sample routes display
- [ ] All columns show: Route_number, Path_id, Station_id
- [ ] Multiple entries visible

### Create
- [ ] Click: Routing_table → Create
- [ ] Form displays with 3 fields
- [ ] Enter: Route = "R003", Path = "P001", Station = "ST001"
- [ ] Click Submit
- [ ] Success message appears
- [ ] New route appears

### Update
- [ ] Click: Routing_table → Update
- [ ] Form displays
- [ ] Enter route and new data
- [ ] Click Update
- [ ] Success message appears

### Delete
- [ ] Click: Routing_table → Delete
- [ ] Form displays
- [ ] Enter route number to delete
- [ ] Click Delete
- [ ] Success message appears

---

## ⏰ Time Table Testing

### View
- [ ] Click: Time_table → View
- [ ] Sample schedules display
- [ ] All columns show: Time_id, Route_number, Station_id, Arrival_time, Departure_time, Day_of_week
- [ ] Times formatted correctly (HH:MM:SS)

### Create
- [ ] Click: Time_table → Create
- [ ] Form displays with 5 fields + dropdown
- [ ] Enter: Route = "R001", Station = "ST001"
- [ ] Set Arrival time (use time picker)
- [ ] Set Departure time
- [ ] Select day from dropdown
- [ ] Click Submit
- [ ] Success message appears
- [ ] New schedule appears in view

### Update
- [ ] Click: Time_table → Update
- [ ] Form displays with all fields
- [ ] Enter Time ID and new data
- [ ] Click Update
- [ ] Success message appears
- [ ] Changes saved

### Delete
- [ ] Click: Time_table → Delete
- [ ] Form displays
- [ ] Enter Time ID
- [ ] Click Delete
- [ ] Success message appears
- [ ] Entry removed

---

## 🕐 Request Time Feature (Main Feature!)

### Basic Test
- [ ] Click: Request_time
- [ ] Form displays with styled layout
- [ ] Enter: Route Number = "R001"
- [ ] Enter: Station ID = "ST001"
- [ ] Click "Get Arrival Time"
- [ ] Results page loads

### Results Verification
- [ ] Route number displayed
- [ ] Station ID displayed
- [ ] Current day shown
- [ ] Current time shown
- [ ] Expected arrival time shown
- [ ] Expected departure time shown
- [ ] Time calculation displayed (hours and minutes)
- [ ] Bus ID shown (if available)
- [ ] Current bus location shown
- [ ] "Back" button works

### No Data Test
- [ ] Enter: Route Number = "R999" (non-existent)
- [ ] Enter: Station ID = "ST999"
- [ ] Click Submit
- [ ] Error/No data message displays
- [ ] Message is user-friendly

---

## 🎨 UI/UX Testing

### Navigation
- [ ] All menu items clickable
- [ ] Hover effects work
- [ ] Dropdowns appear/disappear smoothly
- [ ] No broken links

### Forms
- [ ] All labels clear and readable
- [ ] Input fields properly sized
- [ ] Required fields marked/validated
- [ ] Submit buttons visible and styled
- [ ] Proper spacing between fields

### Messages
- [ ] Success messages appear after create
- [ ] Success messages appear after update
- [ ] Success messages appear after delete
- [ ] Error messages clear and helpful
- [ ] Redirects work after actions

### Visual Design
- [ ] Colors consistent (teal/cyan theme)
- [ ] Text readable
- [ ] Tables formatted properly
- [ ] Footer displays
- [ ] No layout breaks

---

## 🔍 Error Handling Testing

### Database Errors
- [ ] Stop MySQL server
- [ ] Try to access any page
- [ ] Error message appears (not blank page)
- [ ] Restart MySQL - everything works again

### Invalid Data
- [ ] Try to create duplicate Bus ID
- [ ] Appropriate error message
- [ ] Try to update non-existent record
- [ ] Appropriate message displayed

### Empty Forms
- [ ] Try to submit empty create form
- [ ] Validation prevents submission (if required fields added)

---

## 📊 Data Integrity Testing

### Relationships
- [ ] View buses and note their routes
- [ ] Check if routes exist in routing table
- [ ] Verify stations exist in station table
- [ ] Time tables reference valid routes/stations

### Sample Data
- [ ] At least 3 buses in system
- [ ] At least 4 stations with GPS coordinates
- [ ] At least 2 routes configured
- [ ] At least 6 time table entries

---

## 🌐 Browser Testing

- [ ] Works in Chrome
- [ ] Works in Firefox
- [ ] Works in Edge
- [ ] No console errors in browser developer tools

---

## 📱 Accessibility (Future Enhancement)

- [ ] Text is readable (good contrast)
- [ ] Forms have proper labels
- [ ] Could work with screen reader (test if possible)

---

## 🐛 Known Issues to Check

- [ ] File name case sensitivity (if deploying to Linux)
- [ ] Image path in Home.php (may need adjustment)
- [ ] Time zone settings for time calculations
- [ ] Date format for different locales

---

## ✅ Final Verification

- [ ] All CRUD operations work for buses
- [ ] All CRUD operations work for stations
- [ ] All CRUD operations work for routes
- [ ] All CRUD operations work for time tables
- [ ] Request time feature calculates correctly
- [ ] Navigation works smoothly
- [ ] No PHP errors displayed
- [ ] No MySQL errors
- [ ] Data persists correctly
- [ ] Sample data intact

---

## 📝 Test Results

**Date Tested:** _______________

**Tested By:** _______________

**Environment:**
- OS: _______________
- PHP Version: _______________
- MySQL Version: _______________
- Browser: _______________

**Overall Status:**
- [ ] All tests passed ✅
- [ ] Minor issues (list below) ⚠️
- [ ] Major issues (list below) ❌

**Issues Found:**
1. _______________________________________________
2. _______________________________________________
3. _______________________________________________

**Notes:**
_____________________________________________________
_____________________________________________________
_____________________________________________________

---

## 🎉 When All Checked

Congratulations! Your Public Transport Information System is fully functional!

**Next Steps:**
1. Add more sample data
2. Customize the design
3. Add your own features
4. Consider security improvements for production
5. Test with actual users (especially visually impaired people)

---

**Remember:** This is designed to help visually impaired people access public transport information. Consider adding voice features, larger text options, and high contrast modes for better accessibility!

