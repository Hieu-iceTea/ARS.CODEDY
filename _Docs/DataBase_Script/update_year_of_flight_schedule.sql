
# Set the value of the year to change:
SET @year = '2025';

# execute
UPDATE flight_schedule
SET departure_at = DATE_FORMAT(departure_at, CONCAT(@year, '-%m-%d %T')),
    arrival_at   = DATE_FORMAT(arrival_at, CONCAT(@year, '-%m-%d %T')),
    updated_at   = CURRENT_TIMESTAMP,
    version      = version + 1;

# Check database changes:
SELECT * FROM flight_schedule;
