<?php

use App\Mcp\Servers\LeadsServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::local('leads', LeadsServer::class);
