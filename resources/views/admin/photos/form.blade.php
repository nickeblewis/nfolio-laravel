@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Project description',
        'toolbarOptions' => [
            ['header' => [2, 3, false]],
                'bold',
                'italic',
                'blockquote',
                'link',
                'clean',
        ],
        'placeholder' => 'Description text',
        'maxLength' => 2200,
        'rows' => 10,
        'note' => 'describe some of the challenges',
    ])

    @formField('medias', [
        'name' => 'avatar',
        'label' => 'Desktop',
        'note' => 'Shown at a desktop breakpoint'
    ])
@stop
