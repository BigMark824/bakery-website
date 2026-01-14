<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\MenuItems;
class MakeMenuItem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:menu-item';

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

        $menuItem = MenuItems::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image_url' => $imageUrl,
        ]);

        $this->info("Menu item '{$menuItem->name}' created successfully!");
    }
}
