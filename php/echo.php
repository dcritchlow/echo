See console.
<?php

function echo_to_console()
{
  for( $i = 0; $i < func_num_args(); $i++ )
  {
    $argument = func_get_arg($i);
    echo "<script>console.log('$argument')</script>";
  }
}

echo_to_console();
echo_to_console('bla');
echo_to_console('foo', 'bar', 'baz');
