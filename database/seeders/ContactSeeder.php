<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '+1 (555) 123-4567',
                'tags' => 'client,important,business'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@gmail.com',
                'phone' => '+1 (555) 987-6543',
                'tags' => 'friend,personal'
            ],
            [
                'name' => 'Robert Johnson',
                'email' => 'r.johnson@company.com',
                'phone' => '+1 (555) 456-7890',
                'tags' => 'colleague,work,developer'
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@outlook.com',
                'phone' => null,
                'tags' => 'family,personal'
            ],
            [
                'name' => 'Michael Brown',
                'email' => null,
                'phone' => '+1 (555) 321-9876',
                'tags' => 'client,contractor'
            ],
            [
                'name' => 'Sarah Wilson',
                'email' => 'sarah.w@design.co',
                'phone' => '+1 (555) 654-3210',
                'tags' => 'designer,freelancer,creative'
            ],
            [
                'name' => 'David Martinez',
                'email' => 'david.martinez@tech.com',
                'phone' => '+1 (555) 789-0123',
                'tags' => 'tech,startup,investor'
            ],
            [
                'name' => 'Lisa Anderson',
                'email' => 'lisa.anderson@marketing.com',
                'phone' => null,
                'tags' => 'marketing,business,networking'
            ]
        ];

        foreach ($contacts as $contactData) {
            Contact::create($contactData);
        }
    }
}
