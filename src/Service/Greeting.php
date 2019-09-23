<?php


namespace App\Service;


use Psr\Log\LoggerInterface;

/**
 * Class Greeting
 * @package App\service
 */
class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var string
     */
    private $message;

    /**
     * Greeting constructor.
     * @param LoggerInterface $logger
     * @param string $message
     */
    public function __construct(LoggerInterface $logger, string $message)
    {
        $this->logger = $logger;
        $this->message = $message;
    }

    /**
     * @param string $name
     * @return string
     */
    public function greet(string $name): string
    {
        $this->logger->info("Greeted $name");
        return "{$this->message} $name";
    }

}
