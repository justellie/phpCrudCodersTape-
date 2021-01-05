<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Company;


class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company {name} {phone=N/A}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $company=Company::create([
            'name'=>$this->argument('name'),
            'phone'=>$this->argument('phone'),
        ]);
        
        $this->info('Added '. $company->name);

        

        return 0;
    }
}
