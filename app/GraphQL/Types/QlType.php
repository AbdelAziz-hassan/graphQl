<?php
namespace App\GraphQL\Types;

use App\Ql;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class QlType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Ql',
        'description' => 'Details about a ql',
        'model' => Ql::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the ql',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the ql',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Short description of the ql',
            ],
            'color' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The color of the ql',
            ],
            'info' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The info of the ql',
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The country of origin of the ql',
            ]
        ];
    }
}