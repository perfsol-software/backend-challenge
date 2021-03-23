<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Services\ProgressService;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    /**
     * @var ProgressService
     */
    private $progressService;

    /**
     * DomainsController constructor.
     */
    public function __construct(ProgressService $progressService)
    {
        $this->progressService = $progressService;
    }

    public function index()
    {
        return Domain::all();
    }


    public function progress($id)
    {
        return [
            'history' => $this->progressService->byDomainId($id),
        ];
    }
}
