@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://thecharteredspace.com/assets/img/20230727_061824.png" class="logo" alt="The chartec space">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
