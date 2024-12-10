<?php


namespace Askoldex\Teletant;


use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class Log extends AbstractLogger
{
    /**
     * @var LoggerInterface|null $logger
     */
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * @param mixed $level
     * @param \Stringable|string $message
     * @param array $context
     */
    public function log($level, \Stringable|string $message, array $context = []): void
    {
        if ($this->logger instanceof LoggerInterface) {
            $this->logger->log($level, $message, $context);
        }
    }

    /**
     * @return LoggerInterface|null
     */
    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }
}
