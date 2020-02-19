<?php
namespace App\GraphQL\Queries;

use App\Ql;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class QlsQuery extends Query
{
    protected $attributes = [
        'name' => 'qls',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Ql'));
    }

    public function resolve($root, $args)
    {
        return Ql::all();
    }
}
