<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    //

    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',


            '3PL Admin',
            '3PL User',
            '_DEV Bids and Proposals',
            'Accounting',
            'BCM Estimations',
            'BonAero',
            'Boneal Contact Database',
            'Budget to Actual Reporting',
            'Catalog Maintenance',
            'Catalog Order Entry',
            'CEO',
            'CFO',
            'Common Parts',
            'Configuration Manager',
            'CP Approver',
            'Customer Service',
            'Data Entry',
            'default',
            'EMT Dashboard Data Entry',
            'Engineering',
            'Estimations',
            'Estimations Manager',
            'Front Desk',
            'Gate A Reviewer',
            'GLC Estimations',
            'Inactive',
            'inventory',
            'Inventory Manager',
            'Inventory View',
            'IP Approver',
            'Lockheed Martin-Aero User',
            'Maintenance',
            'Management',
            'MKA Estimations',
            'MMF Estimations',
            'Non-conforming',
            'OFS Administration',
            'OFS Count',
            'OFS Management',
            'OFS Specialist',
            'Open Quotes',
            'Order View',
            'Part Estimations',
            'PO Approver',
            'Production User (No Filters)',
            'Production User (With Filters)',
            'Program Manager',
            'Purchasing',
            'Purchasing Super',
            'Purchasing Watch (Read Only)',
            'Quality Manager',
            'Quality Read Only',
            'Quality User',
            'RMA',
            'SECC User',
            'Shipping',
            'System Admins',
            'Tooling',
            'Vendor Merge',
            'Virtual Warehouse',
            'Weekly Reports',



        ];
    }
}
