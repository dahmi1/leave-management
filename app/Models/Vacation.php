<?php


namespace app\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Vacation extends Model
{

}

// these are quick and handy data to insert for testing
// INSERT INTO `leave` (leaveType, leave_report_applied_at, leave_start_at, leave_end_at, resume_working_at, employee_id, created_at, updated_at)
// VALUES 
//     ('yearly', '2024-07-25', '2024-08-01', '2024-08-10', '2024-08-11', 1, NOW(), NOW()),
//     ('sickness', '2024-08-02', '2024-08-15', '2024-08-20', '2024-08-21', 1, NOW(), NOW()),
//     ('educational', '2024-08-05', '2024-08-25', '2024-08-28', '2024-08-29', 1, NOW(), NOW()),
//     ('unpaid', '2024-08-12', '2024-09-01', '2024-09-05', '2024-09-06', 1, NOW(), NOW()),
//     ('yearly', '2024-07-26', '2024-08-02', '2024-08-12', '2024-08-13', 2, NOW(), NOW()),
//     ('sickness', '2024-08-03', '2024-08-18', '2024-08-23', '2024-08-24', 2, NOW(), NOW()),
//     ('educational', '2024-08-06', '2024-08-30', '2024-09-02', '2024-09-03', 2, NOW(), NOW()),
//     ('unpaid', '2024-08-13', '2024-09-02', '2024-09-06', '2024-09-07', 2, NOW(), NOW()),
//     ('yearly', '2024-07-27', '2024-08-03', '2024-08-13', '2024-08-14', 3, NOW(), NOW()),
//     ('sickness', '2024-08-04', '2024-08-20', '2024-08-25', '2024-08-26', 3, NOW(), NOW()),
//     ('educational', '2024-08-07', '2024-08-31', '2024-09-03', '2024-09-04', 3, NOW(), NOW()),
//     ('unpaid', '2024-08-14', '2024-09-03', '2024-09-07', '2024-09-08', 3, NOW(), NOW()),
//     ('yearly', '2024-07-28', '2024-08-04', '2024-08-14', '2024-08-15', 4, NOW(), NOW()),
//     ('sickness', '2024-08-05', '2024-08-22', '2024-08-27', '2024-08-28', 4, NOW(), NOW()),
//     ('educational', '2024-08-08', '2024-09-01', '2024-09-04', '2024-09-05', 4, NOW(), NOW()),
//     ('unpaid', '2024-08-15', '2024-09-04', '2024-09-08', '2024-09-09', 4, NOW(), NOW());
