<?php

namespace Chat;

use Exception;
use SplObjectStorage;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

final class ChatServer implements MessageComponentInterface
{
  private $clients;

  public function __construct()
  {
    $this->clients = new SplObjectStorage();
  }

  public function onOpen(ConnectionInterface $conn): void
  {
    $this->clients->attach($conn);
  }

  public function onMessage(ConnectionInterface $from, $msg): void
  {
    $response = json_decode($msg);
    foreach ($this->clients as $client) {
      if ($response->code == 0) {
        $client->send($msg);
      } else {
        $client->send('{"status":"Disconnected"}');
      }
    }
  }

  public function onClose(ConnectionInterface $conn): void
  {
    $this->clients->detach($conn);
  }

  public function onError(ConnectionInterface $conn, Exception $exception): void
  {
    $conn->close();
  }
}
