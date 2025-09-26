<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CmsModule;

class CmsModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsModule::insert([
            [
                'id' => 1,
                'name' => 'Dashboard',
                'route_name' => 'dashboard',
                'icon' => 'dashboard',
                'sort_order' => 1,
                'status' => 'active',
            ],
            [
                'id' => 2,
                'name' => 'Projects',
                'route_name' => 'projects.index',
                'icon' => 'projects',
                'sort_order' => 2,
                'status' => 'active',
            ],
            [
                'id' => 3,
                'name' => 'Companies',
                'route_name' => 'companies.index',
                'icon' => 'pompanies',
                'sort_order' => 3,
                'status' => 'active',
            ],
            [
                'id' => 4,
                'name' => 'Billing',
                'route_name' => 'billing.index',
                'icon' => 'billing',
                'sort_order' => 4,
                'status' => 'active',
            ],
            [
                'id' => 5,
                'name' => 'Company Profile',
                'route_name' => 'company-profile.index',
                'icon' => 'company-profile',
                'sort_order' => 5,
                'status' => 'active',
            ],
        ]);
    }
}
