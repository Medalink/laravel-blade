{{-- Echo Data --}}
Hello, {{ $name }}.
The current UNIX timestamp is {{ time() }}.

{{-- Echoing Data After Checking For Existence --}}
{{ isset($name) ? $name : 'Default' }}
{{ $name or 'Default' }}

{{-- Displaying Raw Text With Curly Braces --}}
@{{ This will not be processed by Blade }}

{{-- Do not escape data --}}
Hello, {!! $name !!}.

{{-- Escape Data --}}
Hello, {{{ $name }}}.

<?php echo $name; ?>
<?= $name; ?>

<?php
    foreach (range(1, 10) as $number) {
        echo $number;
    }
?>

@include('header')

{{-- Service injection --}}
@inject('metrics', 'App\Services\MetricsService')

{{-- PHP open/close tags --}}
<div class="container">
    @php
        foreach (range(1, 10) as $number) {
            echo $number;
        }
    @endphp
</div>

{{-- Inline PHP --}}
<div class="container">
    @php(custom_function())
</div>

@include('footer')

{{-- Define Blade Layout --}}
<html>
    <head>
        <title>
            @hasSection('title')
                @yield('title') - App Name
            @else
                App Name
            @endif
        </title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @stop

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

{{-- Use Blade Layout --}}
@extends('layouts.master')

@section('sidebar')
    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop

{{-- yield section --}}
@yield('section', 'Default Content')

{{-- If Statement --}}
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

<ul class="list @if (count($records) === 1) extra-class @endif">
    <li>This is the first item</li>
    <li>This is the second item</li>
</ul>

@isset($name)
    Hello, {{ $name }}.
@endisset

@unless (Auth::check())
    You are not signed in.
@endunless

{{-- Loops --}}
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping forever.</p>
@endwhile

{{-- Include --}}
@include('view.name')
@include('view.name', ['some' => 'data'])
@includeIf('view.name', ['some' => 'data'])

{{-- Overwriting Sections --}}
@extends('list.item.container')

@section('list.item.content')
    <p>This is an item of type {{ $item->type }}</p>
@overwrite

{{-- Displaying Language Lines --}}
@lang('language.line')

@choice('language.line', 1)

{{-- This comment will not be in the rendered HTML --}}

{{--
This comment will not be in the rendered HTML
This comment will not be in the rendered HTML
This comment will not be in the rendered HTML
 --}}

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

<script>
    @minify('js')

    var exampleJavascript = {
        this: 'that',
        foo: 'bar',
        doit: function(){
            console.log('yesss');
        }
    };

    @endminify
</script>

<style type="text/css">
    @minify('css')

    a.bg-primary:hover,
    a.bg-primary:focus {
      background-color: #286090;
    }

    .bg-success {
      background-color: #dff0d8;
    }

    a.bg-success:hover,
    a.bg-success:focus {
      background-color: #c1e2b3;
    }

    @endminify
</style>

{{-- Authorization (ACL) --}}

@can('permission', $entity)
    You have permission!
@endcan

@can('permission', $entity)
    You have permission!
@else
    You don't have permission!
@endcan

@cannot ('update', [ 'post' => $post ])
    breeze
@endcannot

@can ('show-post', $post)
    Can Show
@elsecan ('write-post', $post)
    Can write
@elsecannot ('delete-post', $post)
    Not Allowed
@else
    Not Allowed
@endcan

{{-- Stacks --}}
@push('scripts')
    <script src="/example.js"></script>
@endpush

<head>
    @stack('scripts')
</head>

{{-- Custom Control Structures --}}
@custom

@foo('bar', 'baz')
    @datetime($var)

---

{{-- Envoyer directives --}}

@setup
    $now = new DateTime();

    $environment = isset($env) ? $env : "testing";
@endsetup

@servers(['web' => 'user@192.168.1.1'])

@task('foo')
    cd site
    git pull origin {{ $branch }}
    php artisan migrate
@endtask

@after
    @hipchat('token', 'room', 'Envoy')
    @slack('hook', 'channel', 'message')
@endafter

@story('deploy')
    git
    composer install
@endstory

@component('layouts.app')
    @slot('title')
        Home Page
    @endslot

    <div class="col-6">
        @component('inc.alert')
            This is the alert message here.
        @endcomponent
        <h1>Welcome</h1>
    </div>
    <div class="col-6">
        @component('inc.sidebar')
            This is my sidebar text.
        @endcomponent
    </div>

    @includeWhen(Auth::user(), 'nav.user')
@endcomponent

@verbatim
    <div class="container">
        Hello, {{ $name }}.
    </div>
@endverbatim

@switch($char)
    @case('A')
        <p>A</p>
    @break

    @case('B')
        <p>B</p>
    @break

    @default
        <p>Default</p>
@endswitch

{{-- Complex conditional --}}
@if(($x == true) && ($y == false)) 
    <a>foo</a>
@endif

{{-- Single line if statement --}}
@if($foo === true) <p>Text</p> @endif

{{-- Quoted blade directive matching --}}
<p class="first-class @if($x==true) second-class @endif">Text</p>

{{-- Complex conditional inline --}}
<p class="first-class @if(($x == true) && ($y == "yes")) second-class @endif">Text</p>
