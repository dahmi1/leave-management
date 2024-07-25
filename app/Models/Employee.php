<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['workId', 'firstName', 'lastName', 'email', 'phoneNo', 'position', 'sector', 'nationalId', 'joined', 'dateOfBirth'];

}


// quick insert example data
// INSERT INTO employee (workId, firstName, lastName, email, phoneNo, position, sector, nationalId, joined, dateOfBirth, created_at, updated_at)
// VALUES
// ('12345', 'John', 'Doe', 'john.doe@example.com', '1234567890', 'Manager', 'IT', '9876543210', '2023-01-15', '1990-05-20', NOW(), NOW()),
// ('67890', 'Jane', 'Smith', 'jane.smith@example.com', '0987654321', 'Developer', 'Engineering', '5432109876', '2022-11-10', '1985-08-12', NOW(), NOW()),
// ('24680', 'Michael', 'Johnson', 'michael.johnson@example.com', '2345678901', 'Analyst', 'Finance', '4567890123', '2023-02-28', '1988-03-25', NOW(), NOW()),
// ('13579', 'Emily', 'Brown', 'emily.brown@example.com', '3456789012', 'Designer', 'Marketing', '3210987654', '2022-12-05', '1995-09-17', NOW(), NOW());

