<?php

namespace Database\Seeders;

use App\Models\WorkDomain;
use Illuminate\Database\Seeder;

class WorkDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            [
                'name_uz' => 'Savdo va Marketing',
                'name_en' => 'Sales & Marketing',
                'icon' => 'trending_up',
                'image_url' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=3348',
                'sort_order' => 1,
            ],
            [
                'name_uz' => 'Moliya va buxgalteriya',
                'name_en' => 'Finance & Accounting',
                'icon' => 'account_balance',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=2426',
                'sort_order' => 2,
            ],
            [
                'name_uz' => 'Chakana savdo',
                'name_en' => 'Retail',
                'icon' => 'storefront',
                'image_url' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=3270',
                'sort_order' => 3,
            ],
            [
                'name_uz' => 'It va raqamli texnologiyalar',
                'name_en' => 'IT & Digital',
                'icon' => 'developer_board',
                'image_url' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=3264',
                'sort_order' => 4,
            ],
            [
                'name_uz' => 'Ishlab chiqarish',
                'name_en' => 'Manufacturing',
                'icon' => 'factory',
                'image_url' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=3200',
                'sort_order' => 5,
            ],
        ];

        foreach ($domains as $domain) {
            WorkDomain::firstOrCreate(
                ['name_en' => $domain['name_en']],
                $domain
            );
        }
    }
}
