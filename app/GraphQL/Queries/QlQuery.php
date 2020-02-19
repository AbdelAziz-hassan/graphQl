<?php

namespace App\GraphQL\Queries;

use App\Ql;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class QlQuery extends Query
{
    protected $attributes = [
        'name' => 'ql',
    ];

    public function type(): Type
    {
        return GraphQL::type('Ql');
    }

    public function args():array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Ql::findOrFail($args['id']);
    }
}
