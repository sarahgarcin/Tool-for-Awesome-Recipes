<?php

Kirby::plugin('sarah/rouge', [
    'tags' => [
        'rouge' => [
        	'attr' => [
		          'rouge'
		        ],
            'html' => function($tag) {
                return '<span class="rouge">'.$tag->rouge.'</span>';
            }
        ]
    ]
]);