<?php

namespace App\Console\Commands\Freee;

use App\Jobs\SyncCompanyWalletTxns;
use App\Models\Company;
use Illuminate\Console\Command;

class SyncWalletTxns extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'freee:sync-wallet-txns {--company=all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync wallet txns from freee api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $company = $this->option('company');

        $companies = $company == 'all'
            ? Company::connected()->get()
            : Company::connected()->where('id', $company)->get();

        foreach ($companies as $company) {
            SyncCompanyWalletTxns::dispatchSync($company);
            sleep(10);
        }

        $this->comment('Synced wallet_txns!');
    }
}
