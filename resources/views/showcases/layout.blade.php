<h2 id="item-1">Layout</h2>

<h3 id="item-1-1">Containers</h3>
<p>You can use media breakpoints to adjust the container size.</p>
<x-bc::code>.container-{size}</x-bc::code>

<x-bc::code>
&lt;x-bc::container size="sm"&gt;100% wide until small breakpoint&lt;/x-bc::container&gt;
&lt;x-bc::container size="md"&gt;100% wide until medium breakpoint&lt;/x-bc::container&gt;
&lt;x-bc::container size="lg"&gt;100% wide until large breakpoint&lt;/x-bc::container&gt;
&lt;x-bc::container size="xl"&gt;100% wide until extra large breakpoint&lt;/x-bc::container&gt;
&lt;x-bc::container size="xxl"&gt;100% wide until extra extra large breakpoint&lt;/x-bc::container&gt;
</x-bc::code>

<p>To have a fluid container, you can use:</p>
<x-bc::code>
    &lt;x-bc::container fluid &gt;100% wide&lt;/x-bc::container&gt;
</x-bc::code>
