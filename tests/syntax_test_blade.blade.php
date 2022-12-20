{{-- SYNTAX TEST "HTML (Blade).sublime-syntax" --}}

    {{-- This comment will not be in the rendered HTML --}}
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade comment.block.blade --}}
{{--^^^^ punctuation.definition.comment.begin.blade --}}
{{--                                                   ^^^^ punctuation.definition.comment.end.blade --}}
{{--                                                       ^ - comment --}}

    {{--
    This comment will not be in the rendered HTML
    This comment will not be in the rendered HTML
    This comment will not be in the rendered HTML
     --}}
{{-- ^^^^ punctuation.definition.comment.end.blade --}}
{{--     ^ - comment --}}

{{--  PHP tags --}}

    <?php echo $name; ?>
{{--^^^^^^^^^^^^^^^^^^^^^ meta.embedded.php --}}
{{--^^^^^ punctuation.section.embedded.begin.php --}}
{{--     ^^^^^^^^^^^^^ source.php.embedded.html --}}
{{--                  ^^ punctuation.section.embedded.end.php --}}

    <?= $name; ?>
{{--^^^^^^^^^^^^^ meta.embedded.php --}}
{{--^^^ punctuation.section.embedded.begin.php --}}
{{--   ^^^^^^^^ source.php.embedded.html --}}
{{--           ^^ punctuation.section.embedded.end.php --}}

    <?php
{{--^^^^^^ meta.embedded.php --}}
{{--^^^^^ punctuation.section.embedded.begin.php --}}
{{--     ^ source.php.embedded.html --}}
        foreach (range(1, 10) as $number) {
            echo $number;
        }
    ?>
{{--^^ meta.embedded.php punctuation.section.embedded.end.php --}}

{{-- Echo Data --}}

    Hello, {{ $name }}.
{{--^^^^^^^ text.html.blade - meta.interpolation --}}
{{--       ^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--       ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--         ^^^^^^^ source.php.embedded.blade --}}
{{--          ^^^^^ variable.other.php --}}
{{--                ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                  ^^ text.html.blade - meta.interpolation --}}

    The current UNIX timestamp is {{ time() }}.
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ text.html.blade - meta.interpolation --}}
{{--                              ^^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--                              ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                                ^^^^^^^^ source.php.embedded.blade --}}
{{--                                 ^^^^ support.function --}}
{{--                                        ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                                          ^^ text.html.blade - meta.interpolation --}}

{{-- Echoing Data After Checking For Existence --}}

    {{ isset($name) ? $name : 'Default' }}
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade --}}
{{--^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--   ^^^^^ support.function.builtin.php --}}
{{--                ^ keyword.operator.ternary.php --}}
{{--                        ^ keyword.operator.ternary.php --}}
{{--                          ^^^^^^^^^ meta.string.php string.quoted.single.php --}}
{{--                                    ^^ punctuation.section.interpolation.end.blade - source.php --}}

    {{ $name or 'Default' }}
{{--^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade --}}
{{--^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--  ^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--   ^^^^^ variable.other.php --}}
{{--         ^^ keyword.operator.logical.php --}}
{{--            ^^^^^^^^^ meta.string.php string.quoted.single.php --}}
{{--                      ^^ punctuation.section.interpolation.end.blade - source.php --}}

{{-- Do not escape data --}}

    Hello, {!! $name !!}.
{{--^^^^^^^ text.html.blade - meta.interpolation --}}
{{--       ^^^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--       ^^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--          ^^^^^^^ source.php.embedded.blade --}}
{{--           ^^^^^ variable.other.php --}}
{{--                 ^^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                    ^^ text.html.blade - meta.interpolation --}}

{{-- Escape Data --}}

    Hello, {{{ $name }}}.
{{--^^^^^^^ text.html.blade - meta.interpolation --}}
{{--       ^^^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--       ^^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--          ^^^^^^^ source.php.embedded.blade --}}
{{--           ^^^^^ variable.other.php --}}
{{--                 ^^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                    ^^ text.html.blade - meta.interpolation --}}

{{-- Displaying Raw Text With Curly Braces --}}

    @{{ This <b>will not</b> <?php be processed ?> by Blade }}
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade - meta.tag - source --}}
{{--^^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                                                        ^^ punctuation.section.interpolation.end.blade - source.php --}}

    @{{- This <b>will not</b> <?php be processed ?> by Blade -}}
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade - meta.tag - source --}}
{{--^^^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                                                         ^^^ punctuation.section.interpolation.end.blade - source.php --}}

    @{{{- This <b>will not</b> <?php be processed ?> by Blade -}}}
{{--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade - meta.tag - source --}}
{{--^^^^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                                                          ^^^^ punctuation.section.interpolation.end.blade - source.php --}}

{{-- Include Directive --}}

    @include('header')
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^ source.php.embedded.blade meta.string.php string.quoted.single.php --}}
{{--                 ^ punctuation.section.arguments.end.blade - source.php --}}

    @include('view.name', ['some' => 'data'])
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                        ^ punctuation.section.arguments.end.blade - source.php --}}

    @includeIf('view.name', ['some' => 'data'])
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--^^^^^^^^^^ keyword.control.directive.blade --}}
{{--          ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--           ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                          ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Service injection --}}

    @inject('metrics', 'App\Services\MetricsService')
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--       ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                                ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- PHP open/close tags --}}

    <div class="container">
        @php
{{--    ^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade - sourc.php --}}
{{--    ^ punctuation.definition.keyword.blade --}}
{{--        ^ source.php.embedded.blade --}}
            foreach (range(1, 10) as $number) {
                echo $number;
            }
        @endphp
{{--   ^ source.php.embedded.blade --}}
{{--    ^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade - source.php --}}
{{--    ^ punctuation.definition.keyword.blade --}}
    </div>

{{-- Inline PHP --}}

    <div class="container">
        @php(custom_function())
{{--    ^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--         ^^^^^^^^^^^^^^^ variable.function.php --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}

        @php($bool = $var ?? false)
{{--    ^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--         ^^^^^ variable.other.php --}}
{{--               ^ keyword.operator.assignment.php --}}
{{--                 ^^^^ variable.other.php --}}
{{--                      ^^ keyword.operator.null-coalescing.php --}}
{{--                         ^^^^^ constant.language.boolean.php --}}
{{--                              ^ punctuation.section.arguments.end.blade - source.php --}}

        @php($bool = $bool ?: true)
{{--    ^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--         ^^^^^ variable.other.php --}}
{{--               ^ keyword.operator.assignment.php --}}
{{--                 ^^^^^ variable.other.php --}}
{{--                       ^^ keyword.operator.ternary.php --}}
{{--                          ^^^^ constant.language.boolean.php --}}
{{--                              ^ punctuation.section.arguments.end.blade - source.php --}}
    </div>

{{-- Define Blade Layout --}}

    <html>
        <head>
            <title>
                @hasSection('title')
{{--            ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--                       ^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                ^ - meta.embedded.blade source.blade meta.directive --}}
{{--            ^^^^^^^^^^^ keyword.control.directive.blade --}}
{{--                       ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                        ^^^^^^^ source.php.embedded.blade --}}
{{--                               ^ punctuation.section.arguments.end.blade - source.php --}}
                    @yield('title') - App Name
{{--                ^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--                      ^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--                ^^^^^^ keyword.control.directive.blade --}}
{{--                      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                       ^^^^^^^ source.php.embedded.blade --}}
{{--                              ^ punctuation.section.arguments.end.blade - source.php --}}
                @else
{{--            ^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                 ^ - meta.embedded.blade source.blade meta.directive --}}
                    App Name
                @endif
{{--            ^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                  ^ - meta.embedded.blade source.blade meta.directive --}}
            </title>
        </head>
        <body>
            @section('sidebar')
{{--        ^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--                ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--        ^^^^^^^^ keyword.control.directive.blade --}}
{{--                ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                 ^^^^^^^^^ source.php.embedded.blade --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}
                This is the master sidebar.
            @stop
{{--        ^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--             ^ - meta.embedded.blade source.blade meta.directive --}}
            <div class="container">
                @yield('content')
{{--            ^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--                  ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                             ^ - meta.embedded.blade source.blade meta.directive --}}
{{--            ^^^^^^ keyword.control.directive.blade --}}
{{--                  ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                   ^^^^^^^^^ source.php.embedded.blade --}}
{{--                            ^ punctuation.section.arguments.end.blade - source.php --}}
            </div>
        </body>
    </html>

{{-- Use Blade Layout --}}

    @extends('layouts.master')
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                          ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                         ^ punctuation.section.arguments.end.blade - source.php --}}

    @section('sidebar')
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                   ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^ source.php.embedded.blade --}}
{{--                  ^ punctuation.section.arguments.end.blade - source.php --}}
        <p>This is appended to the master sidebar.</p>
{{--    ^^^ meta.tag --}}
{{--                                              ^^^^ meta.tag --}}
    @stop
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}

    @section('content')
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                   ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^ source.php.embedded.blade --}}
{{--                  ^ punctuation.section.arguments.end.blade - source.php --}}
        <p>This is my body content.</p>
    @stop
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- yield section --}}

    @yield('section', 'Default Content')
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--      ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                    ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                   ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Empty Statement --}}

    @empty($name)
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--      ^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--             ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--       ^^^^^ source.php.embedded.blade --}}
{{--            ^ punctuation.section.arguments.end.blade - source.php --}}
        Hello, {{ $name }}.
{{--    ^^^^^^^ text.html.blade - meta.interpolation --}}
{{--           ^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--           ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--             ^^^^^^^ source.php.embedded.blade --}}
{{--              ^^^^^ variable.other.php --}}
{{--                    ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                      ^^ text.html.blade - meta.interpolation --}}
    @endempty
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- If Statement --}}

    @if (count($records) === 1)
{{--^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--    ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^ keyword.control.directive.blade --}}
{{--    ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--     ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}
        I have one record!
{{--   ^^^^^^^^^^^^^^^^^^^^ text.html.blade - meta.embedded.blade source.blade meta.directive - source.php --}}
    @elseif (count($records) > 1)
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                             ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                            ^ punctuation.section.arguments.end.blade - source.php --}}
        I have multiple records!
{{--   ^^^^^^^^^^^^^^^^^^^^^^^^^^ text.html.blade - meta.embedded.blade source.blade meta.directive - source.php --}}
    @else
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}
        I don't have any records!
{{--   ^^^^^^^^^^^^^^^^^^^^^^^^^^^ text.html.blade - meta.embedded.blade source.blade meta.directive - source.php --}}
    @endif
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Complex if statement --}}

    @if(($x == true) && ($y == false))
{{--^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                  ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^ keyword.control.directive.blade --}}
{{--   ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                 ^ punctuation.section.arguments.end.blade - source.php --}}
        <a>foo</a>
    @endif
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Single line if statement --}}

    @if($foo === true) <p>Text</p> @endif
{{--^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive --}}
{{--                  ^^^^^^^^^^^^^ - meta.embedded.blade source.blade meta.directive --}}
{{--                               ^^^^^^ meta.embedded.blade source.blade meta.directive --}}
{{--                                     ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Isset Statement --}}

    @isset($name)
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--      ^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--             ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--       ^^^^^ source.php.embedded.blade --}}
{{--            ^ punctuation.section.arguments.end.blade - source.php --}}
        Hello, {{ $name }}.
{{--    ^^^^^^^ text.html.blade - meta.interpolation --}}
{{--           ^^^^^^^^^^^ text.html.blade meta.interpolation.blade --}}
{{--           ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--             ^^^^^^^ source.php.embedded.blade --}}
{{--              ^^^^^ variable.other.php --}}
{{--                    ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                      ^^ text.html.blade - meta.interpolation --}}
    @endisset
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Unless Statement --}}

    @unless (Auth::check())
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                       ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                      ^ punctuation.section.arguments.end.blade - source.php --}}
        You are not signed in.
{{--    ^^^^^^^^^^^^^^^^^^^^^^ text.html.blade - meta.interpolation --}}
    @endunless
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Switch Statement --}}

    @switch($char)
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--       ^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--              ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--       ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--        ^^^^^ source.php.embedded.blade --}}
{{--             ^ punctuation.section.arguments.end.blade - source.php --}}
        @case('A')
{{--    ^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--         ^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--              ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^ source.php.embedded.blade --}}
{{--             ^ punctuation.section.arguments.end.blade - source.php --}}
            <p>A</p>
        @break
{{--    ^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}

        @case('B')
{{--    ^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--         ^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--              ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^ source.php.embedded.blade --}}
{{--             ^ punctuation.section.arguments.end.blade - source.php --}}
            <p>B</p>
        @break
{{--    ^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}
        @default
{{--    ^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--            ^ - meta.embedded.blade source.blade meta.directive --}}
            <p>Default</p>
    @endswitch
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Loops --}}

    @for ($i = 0; $i < 10; $i++)
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--     ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                            ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^ keyword.control.directive.blade --}}
{{--     ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--      ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                           ^ punctuation.section.arguments.end.blade - source.php --}}
        The current value is {{ $i }}
    @endfor
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--       ^ - meta.embedded.blade source.blade meta.directive --}}

    @foreach ($users as $user)
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--         ^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                          ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                         ^ punctuation.section.arguments.end.blade - source.php --}}
        <p>This is user {{ $user->id }}</p>
    @endforeach
{{--^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--           ^ - meta.embedded.blade source.blade meta.directive --}}

    @forelse($users as $user)
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                         ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                        ^ punctuation.section.arguments.end.blade - source.php --}}
        <li>{{ $user->name }}</li>
    @empty
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^ - meta.embedded.blade source.blade meta.directive --}}
        <p>No users</p>
    @endforelse
{{--^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--           ^ - meta.embedded.blade source.blade meta.directive --}}

    @while (true)
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--       ^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--             ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--       ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--        ^^^^ source.php.embedded.blade --}}
{{--            ^ punctuation.section.arguments.end.blade - source.php --}}
        <p>I'm looping forever.</p>
    @endwhile
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Overwriting Sections --}}

    @extends('list.item.container')

    @section('list.item.content')
        <p>This is an item of type {{ $item->type }}</p>
    @overwrite

{{-- Displaying Language Lines --}}

    @lang('language.line')
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--     ^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                      ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^ keyword.control.directive.blade --}}
{{--     ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--      ^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                     ^ punctuation.section.arguments.end.blade - source.php --}}

    @choice('language.line', 1)
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--       ^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--       ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--        ^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Blade Extensions Compatibility --}}
{{-- https://github.com/RobinRadic/blade-extensions --}}

    @foreach($stuff as $key => $val)
    {{ $loop->index }}       {{-- int, zero based --}}
    {{ $loop->index1 }}      {{-- int, starts at 1 --}}
    {{ $loop->revindex }}    {{-- int --}}
        {{ $loop->revindex1 }}   {{-- int --}}
    {{ $loop->first }}       {{-- bool --}}
    {{ $loop->last }}        {{-- bool --}}
    {{ $loop->even }}        {{-- bool --}}
    {{ $loop->odd }}         {{-- bool --}}
    {{ $loop->length }}      {{-- int --}}

        @foreach($other as $name => $age)

            {{ $loop->parent->odd }}

            @foreach($friends as $foo => $bar)

                {{ $loop->parent->index }}
                {{ $loop->parent->parentLoop->index }}

            @endforeach

        @endforeach

        @section('content')
            @partial('partials.danger-panel')
                @block('title', 'This is the panel title')

                @block('body')
                    This is the panel body.
                @endblock
            @endpartial
        @stop

        @partial('partials.panel')
            @block('type', 'danger')

            @block('title')
                Danger! @render('title')
            @endblock
        @endpartial

    {{-- with arguments --}}
        @continue($user->type == 1)
        @break($user->number == 5)

    {{-- without arguments --}}
        @break
        @continue

    @endforeach

    {{ $newvar }}
    @set('newvar', 'value')
    @set($now, new DateTime('now'))
    @set('myArr', ['my' => 'arr'])
    @set('myArr2', array('my' => 'arr'))

    @unset('newvar')
    @unset($newvar)

    @debug($somearr)

    // xdebug_break breakpoints (configurable) to debug compiled views. Sweet? YES!
    @breakpoint

    @markdown
    # Some markdown code
    ** with some bold text too **
    @endmarkdown

    @section('content')
        @embed('components.panel', ['type' => 'danger', 'items' => ['first', 'second', 'third'] ])
            @section('content')
                <p>Hello World!</p>
            @stop
        @endembed
    @stop

    @macrodef('divider', $class = 'divider', $role = 'seperator')
        <?php return "<li role='{$role}' class='{$class}'></li>"; ?>
    @endmacro

    <div class="container">
        <h1>Title</h1>

        @macro("divider")

        <p>Paragraph</p>
    </div>

    @embed('blade-ext::dropdown', ['button' => true ])
        @section('label', 'Choose')
        @section('items')
            @macro('item', 'Action')
            @macro('item', 'Another Action')
            @macro('item', 'Something else here')
            @macro('item', 'Separated link')
        @stop
    @endembed

{{-- Embedded JavaScript --}}

    <script>
        @minify('js')
{{--    ^^^^^^^ keyword.control.directive.blade --}}
{{--           ^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}

        var exampleJavascript = {
            this: 'that',
            foo: 'bar',
            doit: function(){
                console.log('yesss');
            }
        };

        var app = {{ Illuminate\Support\Js::from($array) }};
{{--              ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.interpolation.blade --}}
{{--              ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                                     ^^ punctuation.section.interpolation.end.blade - source.php --}}
        @endminify
{{--    ^^^^^^^^^^ keyword.control.directive.blade --}}
    </script>

{{-- Embedded CSS --}}

    <style type="text/css">
        @minify('css')
{{--    ^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--           ^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}

        a.bg-primary:hover,
        a.bg-primary:focus {
          background-color: {{ $color }};
{{--                        ^^^^^^^^^^^^ meta.property-value.css meta.interpolation.blade --}}
{{--                        ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                          ^^^^^^^^ source.php.embedded.blade --}}
{{--                                  ^^ punctuation.section.interpolation.end.blade - source.php --}}
        }

        .bg-success {
          background-color: #dff0d8;
{{--                       ^^^^^^^^ meta.property-value.css -  meta.embedded --}}
        }

{{-- https://github.com/Medalink/laravel-blade/issues/194 --}}
        @media (min-width: 768px) { }
{{--    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.at-rule.media.css --}}
{{--    ^^^^^^ keyword.control.directive.css --}}

        @endminify
{{--    ^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--              ^ - meta.embedded.blade source.blade meta.directive--}}
    </style>

{{-- Authorization (ACL) --}}

    @can('permission', $entity)
{{--^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--    ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^ keyword.control.directive.blade --}}
{{--    ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--     ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}
        You have permission!
    @endcan
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--       ^ - meta.embedded.blade source.blade meta.directive --}}

    @can('permission', $entity)
{{--^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--    ^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                           ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^ keyword.control.directive.blade --}}
{{--    ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--     ^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                          ^ punctuation.section.arguments.end.blade - source.php --}}
        You have permission!
    @else
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}
        You don't have permission!
    @endcan
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--       ^ - meta.embedded.blade source.blade meta.directive --}}

    @cannot ('update', [ 'post' => $post ])
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                       ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                      ^ punctuation.section.arguments.end.blade - source.php --}}
        breeze
    @endcannot
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}

    @can ('show-post', $post)
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--     ^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                         ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^ keyword.control.directive.blade --}}
{{--     ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--      ^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                        ^ punctuation.section.arguments.end.blade - source.php --}}
        Can Show
    @elsecan ('write-post', $post)
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                              ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                             ^ punctuation.section.arguments.end.blade - source.php --}}
        Can write
    @elsecannot ('delete-post', $post)
{{--^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--            ^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                  ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^^^^ keyword.control.directive.blade --}}
{{--            ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--             ^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                 ^ punctuation.section.arguments.end.blade - source.php --}}
        Not Allowed
    @else
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}
        Not Allowed
    @endcan
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--       ^ - meta.embedded.blade source.blade meta.directive --}}

    @canany (['show-post', 'write-post'])
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                     ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                    ^ punctuation.section.arguments.end.blade - source.php --}}
        Can Show or write
    @elsecanany (['update-post', 'delete-post'])
{{--^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--            ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                            ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^^^^ keyword.control.directive.blade --}}
{{--            ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--             ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                           ^ punctuation.section.arguments.end.blade - source.php --}}
        Can update or delete
    @endcanany
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Stacks --}}

    @push('scripts')
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--     ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^ keyword.control.directive.blade --}}
{{--     ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--      ^^^^^^^^^ source.php.embedded.blade --}}
{{--               ^ punctuation.section.arguments.end.blade - source.php --}}
        <script src="/example.js"></script>
    @endpush
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--        ^ - meta.embedded.blade source.blade meta.directive --}}

    <head>
        @stack('scripts')
{{--    ^^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--          ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                     ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^^^ keyword.control.directive.blade --}}
{{--          ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--           ^^^^^^^^^ source.php.embedded.blade --}}
{{--                    ^ punctuation.section.arguments.end.blade - source.php --}}
    </head>

    @once
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^ - meta.embedded.blade source.blade meta.directive --}}
        @push('scripts')
{{--    ^^^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--         ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                    ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^^^^^^^ source.php.embedded.blade --}}
{{--                   ^ punctuation.section.arguments.end.blade - source.php --}}
            <script src="/example.js"></script>>
        @endpush
{{--    ^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--            ^ - meta.embedded.blade source.blade meta.directive --}}
    @endonce
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--        ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Custom Control Structures --}}

    @custom
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade variable.function.blade --}}
{{--       ^ - meta.function-call --}}

    @foo('bar', 'baz')
{{--^^^^^^^^^^^^^^^^^^ - meta.directive meta.directive --}}
{{--^^^^ meta.embedded.blade source.blade meta.directive.blade variable.function.blade --}}
{{--    ^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--    ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--     ^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                 ^ punctuation.section.arguments.end.blade - source.php --}}

    @datetime  ( $var )
{{--^^^^^^^^^^^^^^^^^^^ - meta.directive meta.directive --}}
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade variable.function.blade --}}
{{--         ^^ meta.embedded.blade source.blade meta.directive.blade - variable --}}
{{--           ^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--           ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--            ^^^^^^ source.php.embedded.blade --}}
{{--                  ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Envoyer directives --}}

    @setup
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^ - meta.embedded.blade source.blade meta.directive --}}
        $now = new DateTime();

        $environment = isset($env) ? $env : "testing";
    @endsetup
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

    @servers(['web' => 'user@192.168.1.1'])
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                                       ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^ keyword.control.directive.blade --}}
{{--        ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                      ^ punctuation.section.arguments.end.blade - source.php --}}

    @task('foo')
{{--^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--     ^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--            ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^ keyword.control.directive.blade --}}
{{--     ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--      ^^^^^ source.php.embedded.blade --}}
{{--           ^ punctuation.section.arguments.end.blade - source.php --}}
        cd site
        git pull origin {{ $branch }}
        php artisan migrate
    @endtask
{{--^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--        ^ - meta.embedded.blade source.blade meta.directive --}}

    @after
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^ - meta.embedded.blade source.blade meta.directive --}}
        @hipchat('token', 'room', 'Envoy')
        @slack('hook', 'channel', 'message')
    @endafter
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

    @story('deploy')
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--       ^^^^^^^^ source.php.embedded.blade --}}
{{--               ^ punctuation.section.arguments.end.blade - source.php --}}
        git
        composer install
    @endstory
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

    @component('layouts.app')
{{--^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--          ^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                         ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^^^ keyword.control.directive.blade --}}
{{--          ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--           ^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                        ^ punctuation.section.arguments.end.blade - source.php --}}
        @slot('title')
{{--    ^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                  ^ - meta.embedded.blade source.blade meta.directive --}}
{{--    ^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^^^^^ source.php.embedded.blade --}}
{{--                 ^ punctuation.section.arguments.end.blade - source.php --}}
            Home Page
        @endslot
{{--    ^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--            ^ - meta.embedded.blade source.blade meta.directive --}}

        <div class="col-6">
            @component('inc.alert')
{{--        ^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                  ^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--        ^^^^^^^^^^ keyword.control.directive.blade --}}
{{--                  ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                   ^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                              ^ punctuation.section.arguments.end.blade - source.php --}}
                This is the alert message here.
            @endcomponent
{{--        ^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                     ^ - meta.embedded.blade source.blade meta.directive --}}
            <h1>Welcome</h1>
        </div>
        <div class="col-6">
            @component('inc.sidebar')
{{--        ^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                  ^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                                 ^ - meta.embedded.blade source.blade meta.directive --}}
{{--        ^^^^^^^^^^ keyword.control.directive.blade --}}
{{--                  ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--                   ^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                ^ punctuation.section.arguments.end.blade - source.php --}}
                This is my sidebar text.
            @endcomponent
{{--        ^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                     ^ - meta.embedded.blade source.blade meta.directive --}}
        </div>

        @includeWhen(Auth::user(), 'nav.user')
    @endcomponent
{{--^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--             ^ - meta.embedded.blade source.blade meta.directive --}}

    @verbatim
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}
        <div class="container">
            Hello, {{ $name }}.
{{--               ^^^^^^^^^^^ meta.interpolation.blade --}}
{{--               ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                 ^^^^^^^ source.php.embedded.blade --}}
{{--                  ^^^^^ variable.other.php --}}
{{--                        ^^ punctuation.section.interpolation.end.blade - source.php --}}
        </div>
    @endverbatim
{{--^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--            ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Helpers --}}

    @csrf
    @dd('Compile the "dd" statements into valid PHP.')
    @dump('Compile the "dump" statements into valid PHP')
    @method('post')

{{-- Validation Errors --}}

    @error('title')
{{--^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--      ^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^ keyword.control.directive.blade --}}
{{--      ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--       ^^^^^^^ source.php.embedded.blade --}}
{{--              ^ punctuation.section.arguments.end.blade - source.php --}}
    @enderror
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Livewire --}}

    @livewireStyles
{{--^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--               ^ - meta.embedded.blade source.blade meta.directive --}}
    @livewireScripts
{{--^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--                ^ - meta.embedded.blade source.blade meta.directive --}}

    @livewire('show-contact', ['contact' => $contact])
{{--^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--                                                  ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^^^^^^ keyword.control.directive.blade --}}
{{--         ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                                 ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Environment Directives --}}

    @production
{{--^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--           ^ - meta.embedded.blade source.blade meta.directive --}}
        In Production
    @endproduction
{{--^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--              ^ - meta.embedded.blade source.blade meta.directive --}}

    @env('staging')
{{--^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--    ^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--               ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^^ keyword.control.directive.blade --}}
{{--    ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--     ^^^^^^^^^ source.php.embedded.blade --}}
{{--              ^ punctuation.section.arguments.end.blade - source.php --}}
        The application is running in "staging"...
    @endenv
{{--^^^^^^^ meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--       ^ - meta.embedded.blade source.blade meta.directive --}}

{{-- Conditional Classes --}}

    <span @class(['font-bold', 'mt-4', 'ml-2' => true, 'mr-2' => false])></span>
{{--      ^^^^^^ meta.tag.inline meta.embedded.blade source.blade meta.directive.blade keyword.control.directive.blade --}}
{{--            ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.tag.inline meta.embedded.blade source.blade meta.directive.arguments.blade --}}
{{--      ^^^^^^ keyword.control.directive.blade --}}
{{--            ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--             ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                                                   ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- Rendering JSON --}}

    @js($data, JSON_FORCE_OBJECT, 256)
{{--^^^ meta.embedded.blade source.blade meta.directive.blade - meta.directive meta.directive --}}
{{--   ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade - meta.directive meta.directive --}}
{{--                                  ^ - meta.embedded.blade source.blade meta.directive --}}
{{--^^^ keyword.control.directive.blade --}}
{{--   ^ punctuation.section.arguments.begin.blade - source.php --}}
{{--    ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade --}}
{{--                                 ^ punctuation.section.arguments.end.blade - source.php --}}

{{-- https://github.com/Medalink/laravel-blade/issues/185 --}}

    <x-form.label for="name">
{{--^^^^^^^^^^^^^^^^^^^^^^^^^ meta.tag.other.html - invalid --}}
    </x-form.label>
{{--^^^^^^^^^^^^^^^ meta.tag.other.html - invalid --}}

    <x-slot:title>
{{--^^^^^^^^^^^^^^ meta.tag.other.html - invalid --}}
    </x-slot>
{{--^^^^^^^^^ meta.tag.other.html - invalid --}}

{{-- Quoted blade directive matching --}}

    <p class="first-class @if($x==true) second-class @endif">Text</p>
{{--         ^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}
{{--                      ^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html meta.embedded.blade source.blade meta.directive --}}
{{--                                   ^^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}
{{--                                                 ^^^^^^ meta.attribute-with-value.class.html meta.string.html meta.embedded.blade source.blade meta.directive --}}
{{--                                                       ^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}

{{-- Complex conditional inline --}}

    <p class="first-class @if(($x == true) && ($y == "yes")) second-class @endif">Text</p>
{{--         ^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}
{{--                      ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html meta.embedded.blade source.blade meta.directive --}}
{{--                                                        ^^^^^^^^^^^^^^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}
{{--                                                                      ^^^^^^ meta.attribute-with-value.class.html meta.string.html meta.embedded.blade source.blade meta.directive --}}
{{--                                                                            ^ meta.attribute-with-value.class.html meta.string.html string.quoted.double.html - meta.embedded.blade source.blade meta.directive --}}

{{-- Complex interpolation in embedded code --}}

    <div style="color: <?= echo "color_$value"; ?>">
{{--           ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.attribute-with-value.style.html meta.string.html --}}
{{--            ^^^^^^^ source.css.embedded.html - meta.embedded.php --}}
{{--                   ^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.css.embedded.html meta.property-value.css meta.embedded.php --}}
{{--                   ^^^ punctuation.section.embedded.begin.php --}}
{{--                       ^^^^ support.function.builtin.php --}}
{{--                            ^^^^^^^ meta.string.php string.quoted.double.php --}}
{{--                                   ^^^^^^ meta.string.php meta.interpolation.php variable.other.php --}}
{{--                                         ^ meta.string.php string.quoted.double.php punctuation.definition.string.end.php --}}
{{--                                          ^ punctuation.terminator.statement.php --}}
{{--                                            ^^ punctuation.section.embedded.end.php --}}
{{--                                              ^ punctuation.definition.string.end.html --}}
{{--                                               ^ meta.tag punctuation.definition.tag.end.html --}}

    <div style="color: {{ "color_$value" }}">
{{--           ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.attribute-with-value.style.html meta.string.html --}}
{{--            ^^^^^^^ source.css.embedded.html - meta.interpolation.blade --}}
{{--                   ^^^^^^^^^^^^^^^^^^^^ source.css.embedded.html meta.property-value.css meta.interpolation.blade --}}
{{--                   ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                      ^^^^^^^ meta.string.php string.quoted.double.php --}}
{{--                             ^^^^^^ meta.string.php meta.interpolation.php variable.other.php --}}
{{--                                   ^ meta.string.php string.quoted.double.php punctuation.definition.string.end.php --}}
{{--                                     ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                                       ^ punctuation.definition.string.end.html --}}
{{--                                        ^ meta.tag punctuation.definition.tag.end.html --}}

    <div onclick="run( <?= echo "arg_$value"; ?> )">
{{--             ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.attribute-with-value.event.html meta.string.html --}}
{{--              ^^^^^ source.js.embedded.html meta.function-call - meta.embedded.php --}}
{{--                   ^^^^^^^^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.function-call meta.embedded.php --}}
{{--                                            ^^ source.js.embedded.html meta.function-call - meta.embedded.php --}}
{{--                 ^ punctuation.section.group.begin.js --}}
{{--                   ^^^ punctuation.section.embedded.begin.php --}}
{{--                       ^^^^ support.function.builtin.php --}}
{{--                            ^^^^^ meta.string.php string.quoted.double.php --}}
{{--                                 ^^^^^^ meta.string.php meta.interpolation.php variable.other.php --}}
{{--                                       ^ meta.string.php string.quoted.double.php punctuation.definition.string.end.php --}}
{{--                                        ^ punctuation.terminator.statement.php --}}
{{--                                          ^^ punctuation.section.embedded.end.php --}}
{{--                                             ^ punctuation.section.group.end.js --}}
{{--                                              ^ punctuation.definition.string.end.html --}}
{{--                                               ^ meta.tag punctuation.definition.tag.end.html --}}

    <div onclick="run( {{ "arg_$value" }} )">
{{--             ^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.attribute-with-value.event.html meta.string.html --}}
{{--              ^^^^^ source.js.embedded.html meta.function-call - meta.interpolation.blade --}}
{{--                   ^^^^^^^^^^^^^^^^^^ source.js.embedded.html meta.function-call meta.interpolation.blade --}}
{{--                                     ^^ source.js.embedded.html meta.function-call - meta.interpolation.blade --}}
{{--                 ^ punctuation.section.group.begin.js --}}
{{--                   ^^ punctuation.section.interpolation.begin.blade - source.php --}}
{{--                      ^^^^^ meta.string.php string.quoted.double.php --}}
{{--                           ^^^^^^ meta.string.php meta.interpolation.php variable.other.php --}}
{{--                                 ^ meta.string.php string.quoted.double.php punctuation.definition.string.end.php --}}
{{--                                   ^^ punctuation.section.interpolation.end.blade - source.php --}}
{{--                                      ^ punctuation.section.group.end.js --}}
{{--                                       ^ punctuation.definition.string.end.html --}}
{{--                                        ^ meta.tag punctuation.definition.tag.end.html --}}
