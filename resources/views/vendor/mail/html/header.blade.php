<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logo/logo.png') }}" class="logo" alt="Deerwalk Developers community">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
