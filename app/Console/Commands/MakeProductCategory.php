<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\ProductCategory;
class MakeProductCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a product category.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Category name?');

        $menuItem = ProductCategory::create([
            'name' => $name,
        ]);

        $this->info("Menu item '{$menuItem->name}' created successfully!");
    }
}
