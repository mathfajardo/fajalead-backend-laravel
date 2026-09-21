<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\ListarLeadsTool;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Leads Server')]
#[Version('0.0.1')]
#[Instructions('Instructions describing how to use the server and its features.')]
class LeadsServer extends Server
{
    protected array $tools = [
        ListarLeadsTool::class,
    ];

    protected array $resources = [
        //
    ];

    protected array $prompts = [
        //
    ];
}
