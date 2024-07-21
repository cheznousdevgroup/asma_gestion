<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository interface and implementation';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $interfaceName = "{$name}RepositoryInterface";
        $repositoryName = "{$name}Repository";

        $interfacePath = app_path("Repositories/{$interfaceName}.php");
        $repositoryPath = app_path("Repositories/{$repositoryName}.php");

        // Create the interface
        if (!File::exists($interfacePath)) {
            File::put($interfacePath, $this->getInterfaceTemplate($interfaceName));
            $this->info("Created interface: {$interfaceName}");
        } else {
            $this->error("Interface already exists: {$interfaceName}");
        }

        // Create the repository
        if (!File::exists($repositoryPath)) {
            File::put($repositoryPath, $this->getRepositoryTemplate($repositoryName, $interfaceName));
            $this->info("Created repository: {$repositoryName}");
        } else {
            $this->error("Repository already exists: {$repositoryName}");
        }

        return Command::SUCCESS;
    }

    protected function getInterfaceTemplate($interfaceName)
    {
        return <<<EOT
        <?php

        namespace App\Repositories;

        interface {$interfaceName}
        {
            public function getAll();
            public function getById(\$id);
            public function create(array \$attributes);
            public function update(\$id, array \$attributes);
            public function delete(\$id);
        }
        EOT;
    }

    protected function getRepositoryTemplate($repositoryName, $interfaceName)
    {
        return <<<EOT
        <?php

        namespace App\Repositories;

        use App\Models\\YourModel;

        class {$repositoryName} implements {$interfaceName}
        {
            public function getAll()
            {
                return YourModel::all();
            }

            public function getById(\$id)
            {
                return YourModel::findOrFail(\$id);
            }

            public function create(array \$attributes)
            {
                return YourModel::create(\$attributes);
            }

            public function update(\$id, array \$attributes)
            {
                return YourModel::where('id', \$id)->update(\$attributes);
            }

            public function delete(\$id)
            {
                return YourModel::destroy(\$id);
            }
        }
        EOT;
    }
}
