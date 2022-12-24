/* SYNTAX TEST "JavaScript (Blade).sublime-syntax" */

   @if(true)
/* ^^^ meta.embedded.blade source.blade meta.directive.blade */
/*    ^^^^^^ meta.embedded.blade source.blade meta.directive.arguments.blade */
/*          ^ - meta.embedded.blade source.blade meta.directive */
/* ^^^ keyword.control.directive.blade */
/*    ^ punctuation.section.arguments.begin.blade */
/*     ^^^^ source.php.embedded.blade constant.language.boolean.php */
/*         ^ punctuation.section.arguments.end.blade */

      var app = {{ Illuminate\Support\Js::from($array) }};
/*              ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ meta.interpolation.blade */
/*              ^^ punctuation.section.interpolation.begin.blade - source.php */
/*                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ source.php.embedded.blade */
/*                                                     ^^ punctuation.section.interpolation.end.blade - source.php */

   @endif
/* ^^^^^^ meta.embedded.blade source.blade meta.directive.blade */
/*       ^ - meta.embedded.blade source.blade meta.directive */
/* ^^^^^^ keyword.control.directive.blade */
