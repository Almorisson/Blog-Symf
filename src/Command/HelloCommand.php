<?php


namespace App\Command;


use App\Service\Greeting;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class HelloCommand
 * @package App\Command
 */
class HelloCommand extends Command
{
    /**
     * @var Greeting
     */
    private $greeting;

    /**
     * HelloCommand constructor.
     * @param Greeting $greeting
     * @param string|null $name
     */
    public function __construct(Greeting $greeting, string $name = "Anonymous")
    {
        $this->greeting = $greeting;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName("app:say-hello")
            ->setDescription("Say hello to user")
            ->setHelp("You must give an input to the command")
            ->addArgument("name", InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln("
                        #----------------#
                        
                        'Hello From App'
                        
                        #----------------#"

                        );
        $output->writeln($this->greeting->greet($name));
    }

}
