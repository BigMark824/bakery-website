<?php

namespace App\Console\Commands;

use Illuminate\Http\Request;
use Illuminate\Console\Command;

use App\Models\{Product, ProductCategory};
class MakeProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a menu item.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Name of item?');
        $description = $this->ask('Item description?');
        $price = $this->ask('Price of item?');
        $imageUrl = $this->ask('Image url?');
        $categorySlug = $this->ask('Category slug? In slug form (eg. french-bread)');

        $category = ProductCategory::where('slug', $categorySlug)->first();

        if (! $category) {
            $this->error("Category with slug '{$categorySlug}' not found.");
            return Command::FAILURE;
        }


        $menuItem = Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image_url' => $imageUrl,
            'category_id' => $category->id
        ]);

        $this->info("Menu item '{$menuItem->name}' created successfully!");
    }
}
