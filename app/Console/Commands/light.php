<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class light extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:light {status?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    protected function command($command)
    {
        $process = proc_open($command, [
            1 => ['pipe', 'w'], // stdout
            2 => ['pipe', 'w'], // stderr
        ], $pipes);

        if (is_resource($process)) {
            while ($line = fgets($pipes[1])) {
                $this->warn($line);
            }

            while ($line = fgets($pipes[2])) {
                $this->error($line);
            }

            fclose($pipes[1]);
            fclose($pipes[2]);

            return proc_close($process);
        }

        return 1;
    }
    
    public function handle()
    {
        if($this->argument('status') === 'on') {

            $this->command('python3');

            $this->info('Turning on the light...');
        } else if($this->argument('status') === 'off') {
            $this->info('Turning off the light...');
        } else {
            $this->error('Invalid status');
        }
    }
}
