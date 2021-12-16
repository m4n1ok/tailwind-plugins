<?php $title = 'Spacing'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>The spacing plugin extends the built in Tailwind spacing config and allows you to create preset responsive spacing groups. It will generate single class names following Tailwinds spacing classes for margin and padding which have responsive spacing instead of single fixed spacing.</p>

  <p>Similiar to responsive typesets, at AREA 17 we like responsive spacing classes so that the spacing between components can be known and predictable. We don't use these for all components but we create rules to space full page width type blocks, or sections, or title bars from other content and then responsive spacing classes help us stay consistent between all these block types across all layouts and pages.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Spacing } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Spacing],
  theme: {
    spacingGroups: {
      "outer-1": {
        "xs": 64,
        "lg": 96
      },
      "inner-1": {
        "xs": 24,
        "md": 40,
        "lg": 64
      },
      "inner-2": {
        "xs": 16,
        "md": 24,
        "lg": 32
      }
    }
  }
  ...
};</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <p>These classes are linked to <code>:root</code> variables that this plugin also makes. For example, based on the reference config mentioned in this guide, we get:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">:root {
  --spacing-outer-1: 4rem;
  --spacing-inner-1: 1.5rem;
  --spacing-inner-2: 1rem;
}

@media (min-width: 650px) {
  :root {
    --spacing-inner-1: 2.5rem;
    --spacing-inner-2: 1.5rem;
  }
}

@media (min-width: 990px) {
  :root {
    --spacing-outer-1: 6rem;
    --spacing-inner-1: 4rem;
    --spacing-inner-2: 2rem;
  }
}</code></pre>
  </figure>

  <p>And then a series of margin and padding Tailwind classes to correspond to these. For example:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.mt-outer-1 {
    margin-top: var(--spacing-outer-1);
}

.pt-inner-1 {
    padding-top: var(--spacing-inner-1);
}</code></pre>
  </figure>

  <p>(<code>.m-</code>, <code>.mx-</code>, <code>my-</code>, <code>mt-</code>, <code>mb-</code>, <code>ml-</code>, <code>mr-</code>, <code>p-</code>, <code>px-</code>, <code>py-</code>, <code>pt-</code>, <code>pb-</code>, <code>pl-</code>, <code>pr-</code> classes will also be created)</p>

  <h2 id="demo">Demo</h2>

  <p>The following <code>div</code> has classes <code>mt-outer-1</code> and <code>p-inner-1</code> and if you resize the window you will see the top margin and inner  padding will change in size as the browser window changes size through the different breakpoints.</p>

</div>

<div class="mt-outer-1 p-inner-1 bg-column">
  <div class="copy">
    <p>Content</p>
  </div>
</div>

<div class="copy mt-20">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="mt-outer-1 p-inner-1 bg-column">
  &lt;div class="copy">
    &lt;p>Content&lt;/p>
  &lt;/div>
&lt;/div></code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
