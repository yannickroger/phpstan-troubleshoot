<?php

declare(strict_types=1);

namespace Some\Project;

final class MyService
{
    private MyRepository $repository;

    public function __construct(
        MyRepository $myRepository
    ) {
        $this->repository = $myRepository;
    }

    public function get(string $uuid): ?string
    {
        return $this->repository->get($uuid);
    }
}
