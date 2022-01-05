<?php $title = 'Container'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>By default all components render across the full width of the viewport. You can use the <code>.container</code> class to create a contained layout. The container class uses the values set in <code>outerGutters</code> and <code>mainColWidths</code> in your <code>tailwind.config.js</code> to create a responsive container.</p>

  <p>Note that the default Tailwind container plugin will need to be disabled.</p>

  <p>Also includes a <code>.breakout</code> class to allow full 100vw elements inside a container.</p>

  <p>From <code>v3.6.0</code> we have a <code>.container-reset</code>, <code>.breakout-reset</code> and there are changes to <code>.breakout</code> to make it more useful.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Setup, Container } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Setup, Container],
  corePlugins: {
    container: false
  },
  theme: {
    mainColWidths: {
      xs: "auto",
      sm: "auto",
      md: "auto",
      lg: "auto",
      xl: "auto",
      xxl: "1440px"
    },
    outerGutters: {
      xs: "20px",
      sm: "30px",
      md: "40px",
      lg: "40px",
      xl: "40px",
      xxl: "0px"
    },
  }
  ...
};</code></pre>
  </figure>

  <p>Requires <code>Setup</code> plugin with <code>theme.mainColWidths</code> and <code>theme.outerGutters</code> configured.</p>

  <h2 id="demo">Demo</h2>

  <h3 id="container">Container</h3>

  <p>This site has its content wrapped in <code>&lt;div class="container"></code>. You'll see it is fluid with outer margins set to the <code>frontend.config.json</code> <code>structure.gutters.outer</code> for each breakpoint. At then, when the window is wider than 1520px wide (<code>structure.breakpoints.xxl</code>) the main column is a fixed width of 1440px (<code>structure.breakpoints.container.xxl</code>) and centered within the window.</p>

  <h3 id="container_reset">Container Reset</h3>

  <p>Introduced in <code>v3.6.0</code>.</p>

  <p>Instead of wrapping all your pages in <code>.container</code>, perhaps you wrap each of your components, and then perhaps at some breakpoint you want go full bleed. In which case <code>.container-reset</code> will be useful. Here, at the <code>lg</code> breakpoint, a <code>.container</code> resets to full bleed:</p>

</div>

<!-- close the container opened in the header include -->
</div>

<div class="container lg:container-reset mt-20 bg-column p-20">
  <p>...</p>
</div>

<!-- reopen container for rest of page content  -->
<div class="container">

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="container lg:container-reset">...&lt;/div></code></pre>
  </figure>

  <h3 id="breakout">Breakout</h3>

  <p>Useful for <code>100vw</code> images or video:</p>
</div>

<div class="breakout mt-20 bg-column py-20">
  <div class="copy px-20">
    <p>...</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="container">
  ...
  &lt;div class="breakout">
    ...
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <p><strong>Note:</strong> This is <strong>not</strong> the same as <code>.container-reset</code>, because <code>.breakout</code> breaks out of a <code>.container</code> and doesn't reset it. <code>.breakout</code> essentially gives you a full bleed <code>100vw</code> element from inside a <code>.container</code>.</p>

  <h3 id="breakout_reset">Breakout Reset</h3>

  <p>Introduced in <code>v3.6.0</code>.</p>

  <p>Breaking out until a breakpoint, in this case <code>lg</code>, at which point the div is contained once again inside of the parent <code>&lt;div class="container"></code>:</p>
</div>

<div class="breakout lg:breakout-reset mt-20 bg-column py-20">
  <div class="copy px-20">
    <p>...</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="breakout lg:breakout-reset">...&lt;/div></code></pre>
  </figure>

  <h3 id="container_inside_breakout">Container width elements inside of breakouts</h3>

  <p>Introduced in <code>v3.6.0</code>.</p>

  <p>You might want to use a breakout as a full bleed colour block, where some items are full bleed and some items within are constrained by the main container. There are a few ways to do this.</p>

  <h4>Nest a <code>.container</code> in <code>.breakout</code>:</h4>
</div>

<div class="breakout mt-20 bg-column py-20">
  <div class="container bg-header py-20">
    <p>...</p>
    <div class="w-8-cols bg-primary">...</div>
    <div class="w-8-cols-vw bg-primary">...</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="breakout">
  &lt;div class="container">
    ...
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <h4>Add outer gutter padding to <code>.breakout</code>:</h4>

  <p><strong>Note:</strong> requires <code>--scroll-bar-visible-width</code> - see <a href="#scrollbarwidth">Additional set up for working with gutters inside <code>.breakout</code></a></p>
</div>

<div class="breakout mt-20 bg-column py-20 px-outer-gutter">
  <div class="bg-header py-20">
    <p>...</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="breakout px-outer-gutter">
  ...
&lt;/div></code></pre>
  </figure>

  <p>(<code>.pr-outer-gutter</code> and <code>.pl-outer-gutter</code> are also included)</p>

  <h4>Add outer gutter padding to a child of <code>.breakout</code>:</h4>

  <p><strong>Note:</strong> requires <code>--scroll-bar-visible-width</code> - see <a href="#scrollbarwidth">Additional set up for working with gutters inside <code>.breakout</code></a></p>
</div>

<div class="breakout mt-20 bg-column py-20">
  <div class="bg-header py-20 px-outer-gutter">
    <p>...</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="breakout">
  &lt;div class="bg-header py-20 px-outer-gutter">
    ...
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>(<code>.pr-outer-gutter</code> and <code>.pl-outer-gutter</code> are also included)</p>

  <h4>Use outer gutter width shims on either side of the content of <code>.breakout</code>:</h4>

  <p><strong>Note:</strong> requires <code>--scroll-bar-visible-width</code> - see <a href="#scrollbarwidth">Additional set up for working with gutters inside <code>.breakout</code></a></p>
</div>

<div class="breakout flex flex-row flex-nowrap mt-20 bg-column py-20">
  <div class="flex-none w-outer-gutter bg-primary"></div>
  <div class="flex-grow bg-header py-20">
    <p>...</p>
  </div>
  <div class="flex-none w-outer-gutter bg-primary"></div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="breakout flex flex-row flex-nowrap">
  &lt;div class="flex-none w-outer-gutter">&lt;/div>
  &lt;div class="flex-grow">
    &lt;p>...&lt;/p>
  &lt;/div>
  &lt;div class="flex-none w-outer-gutter">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <hr>

  <h3 id="scrollbarwidth">Additional set up for working with gutters inside <code>.breakout</code></h3>

  <p>The <code>.breakout</code> class uses <code>100vw</code> as its base, which, frustratingly is likely wider than the document as the document can take up <code>100vw</code> minus the scroll bar width. So, to use <code>p?-outer-gutter</code> type classes on, or within <code>.breakout</code> elements, we need to account for the scrollbar width:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">application.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const scrollbox = document.createElement('div');
scrollbox.style.overflow = 'scroll';
document.body.appendChild(scrollbox);

// Compare inner and out widths of the box to determine scroll bar width
const scrollBarWidth = scrollbox.offsetWidth - scrollbox.clientWidth;

document.body.removeChild(scrollbox);
document.documentElement.style.setProperty('--scroll-bar-width', `${ scrollBarWidth }px`);

// test is scroll bar is visible
function setScrollBarVisible() {
  const scrollBarVisible = document.documentElement.scrollHeight > document.documentElement.clientHeight;
  const overflowYSet = window.getComputedStyle(document.documentElement, null).getPropertyValue('overflow-y') === 'scroll';
  document.documentElement.style.setProperty('--scroll-bar-visible-width', `${ scrollBarVisible || overflowYSet ? scrollBarWidth : 0 }px`);
}

window.addEventListener('load', setScrollBarVisible, false);
window.addEventListener('resized', setScrollBarVisible, false);
setScrollBarVisible();</code></pre>
  </figure>

  <p>This also makes sure than any <a href="/Layout.php">Layout</a> type classes (<code>.w-2-cols</code>, <code>.ml-2-cols</code> etc.) will work correctly inside of <code>.breakout</code> content.</p>
</div>

<?php include 'includes/_footer.php'; ?>
