<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;

class ProgressService
{
    public function byDomainId(int $id)
    {
        return DB::select(
            <<<SQL
        select
            s.score,
            UNIX_TIMESTAMP(s.created_at) as date
        from scores s
        inner join  assessments a on s.assessment_id = a.id and a.domain_id=:domain
    order by s.created_at desc
    limit 12
    SQL,
            ['domain' => $id]
        );
    }

}
