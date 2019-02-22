<?php $classes = $errors->has($name) ? 'is-danger input' : 'input' ?>

<div class="field">
    {{ Form::label($name, null, ['class' => 'label']) }}
  <div class="control">
    {{ Form::text($name, $value ? $value : old($name), array_merge(['class' => $classes], $attributes)) }}
  </div>

  @if ($errors->has($name))
      <p class="help is-danger">{{ $errors->first($name) }}</p>
  @endif
</div>
