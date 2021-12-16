<?php $title = 'Underline'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Added in <code>v3.1.0</code></p>

  <p>Creates a series of classes to style text underlines using modern CSS.</p>

  <p><a href="#demo">Jump to the demos</a> to see each in action, or jump to a specific underline class group:</p>

  <ul>
    <li><a href="#style">Style</a></li>
    <li><a href="#skip">Skip</a></li>
    <li><a href="#thickness">Thickness</a></li>
    <li><a href="#offset">Offset</a></li>
    <li><a href="#color">Color</a></li>
  </ul>

  <h3>A note about Tailwind 3's native fancy underline styles</h3>

  <p>In Tailwind 3, Tailwind introduced "<a href="https://tailwindcss.com/blog/tailwindcss-v3#fancy-underline-styles" target="_blank">fancy underline styles</a>" to allow styling of text decoration underlines and you may choose to use those instead.</p>

  <p>The main differences are these:</p>

  <ul>
    <li>this plugin allows you to set underline colours based off theme defined text, border and background colours - which you may find more useful than using Tailwind's colour names or hex values</li>
    <li>this plugin defines the offset with <code>em</code>s and not <code>px</code> - so the apparent position of the underline is fluid with the font size and not fixed. Essentially, if you wanted your underline to be level with the bottom of the descender on the letter "g" - if you set the position with pixels and change the font size at breakpoints, you'll need to set multiple pixel values. If you use <code>em</code>s, one value should see you good for all font sizes.</li>
    <li>this plugin's classes are prefixed with <code>underline-</code> instead of <code>decoration-</code>, both of which seem sensible, at any rate they don't clash</li>
  </ul>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Underline } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Underline],
  theme: {
    borderColor: ApplyColorVariables(colors, {
        primary: "#757575",
        secondary: "#f00",
        tertiary: "#d9d9d9"
      }
    ),
    textColor: ApplyColorVariables(colors, {
        title: "#000",
        primary: "#1a1a1a",
        secondary: "#757575",
        accent: "#004F91",
      }
    ),
    backgroundColor: ApplyColorVariables(colors, {
        banner: "grey-90",
        accent: "#004F91",
        column: #81EEF3",
        column-alt: "#313BFB"
      }
    )
  }
  ...
};</code></pre>
  </figure>

  <p>Requires <code>theme.textColor</code>, <code>theme.borderColor</code> and/or <code>theme.backgroundColor</code> configured.</p>

  <h2 id="output">Output</h2>

  <p>A set up helper to make sure underline styles are applied:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">[class*=underline-] {
  text-decoration-line: underline;
}</code></pre>
  </figure>

  <p>A series of classes to give the underline a style:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-solid {
  text-decoration-style: solid;
}

.underline-dotted {
  text-decoration-style: dotted;
}

.underline-double {
  text-decoration-style: double;
}

.underline-dashed {
  text-decoration-style: dashed;
}

.underline-wavy {
  text-decoration-style: wavy;
}</code></pre>
  </figure>

  <p>A series of classes to define the underline skip behavior:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-skip-none {
  text-decoration-skip-ink: none;
}

.underline-skip-auto {
  text-decoration-skip-ink: auto;
}

.underline-skip-all {
  text-decoration-skip-ink: all;
}</code></pre>
  </figure>

  <p>Two classes to use <code>text-decoration-thickness</code> keywords:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-thickness-auto {
  text-decoration-thickness: auto;
}

.underline-thickness-from-font {
  text-decoration-thickness: from-font;
}</code></pre>
  </figure>

  <p>A series of thickness classes, in a <code>px</code> scale from 1 to pixels:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-thickness-1 {
  text-decoration-thickness: 1px;
}

.underline-thickness-2 {
  text-decoration-thickness: 2px;
}

...

.underline-thickness-20 {
  text-decoration-thickness: 20px;
}</code></pre>
  </figure>

  <p>A series of offset classes, in a <em>arbitrary</em> scale of 0 to 20, where <code>1 - 0.05em</code>, <code>2 = 0.1em</code> and so on:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-offset-0 {
  text-underline-offset: 0;
}

.underline-offset-1 {
  text-underline-offset: 0.05em;
}

.underline-offset-2 {
  text-underline-offset: 0.1em;
}

...

.underline-offset-20 {
  text-underline-offset: 1em;
}</code></pre>
  </figure>

  <p>A series of negative offset classes in the same <em>arbitrary</em> scale of 0 to 20:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.-underline-offset-1 {
  text-underline-offset: -0.05em;
}

.-underline-offset-2 {
  text-underline-offset: -0.1em;
}

...

.-underline-offset-20 {
  text-underline-offset: -1em;
}</code></pre>
  </figure>

  <p>And finally, a series of colour classes based on your tailwind config color set for <code>textColor</code>, <code>backgroundColor</code> and <code>borderColor</code>, for example:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.underline-text-primary {
  text-decoration-color: #1a1a1a;
}

.underline-text-secondary {
  text-decoration-color: #757575;
}

.underline-border-primary {
  text-decoration-color: #757575;
}

.underline-border-secondary {
  text-decoration-color: #f00;
}</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <h3>Responsive, interactive demo</h3>

</div>

<span class="inline-block f-h2 mt-20 underline-solid underline-offset-4 underline-thickness-4 underline-border-tertiary underline-skip-none lg:underline-thickness-8 focus:underline-border-secondary hover:underline-border-primary">hover me, resize page</span>

<div class="copy mt-40">

  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;span class="underline-solid underline-offset-4 underline-thickness-4 underline-border-tertiary underline-skip-none lg:underline-thickness-8 focus:underline-border-secondary hover:underline-border-primary">&lt;span></code></pre>
  </figure>

  <hr>

  <h3 id="style">Underline style (<code>text-decoration-style</code>)</h3>
</div>

<?php
  $styles = ['underline-solid', 'underline-double', 'underline-dotted', 'underline-dashed', 'underline-wavy'];
  $i = 0;

  foreach($styles as $value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="'.$value.'">'.$value.'&lt;/span<br>';
    $i++;
  }
?></code></pre>
  </figure>

  <hr>

  <h3 id="skip">Underline skip (<code>text-decoration-skip-ink</code>)</h3>
</div>

<?php
  $styles = ['underline-skip-none', 'underline-skip-auto', 'underline-skip-all'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>

  <hr>

  <h3 id="thickness">Underline thickness (<code>text-decoration-thickness</code>)</h3>

  <h4 id="thickness-keywords">Thickness keywords</h4>
</div>

<?php
  $styles = ['underline-thickness-auto', 'underline-thickness-from-font'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>

  <hr>

  <h4 id="thickness-scale">Thickness scale (in <code>px</code>)</h4>
</div>

<?php
  $styles = ['underline-thickness-1', 'underline-thickness-2', 'underline-thickness-3', 'underline-thickness-4', 'underline-thickness-5', 'underline-thickness-6', 'underline-thickness-7', 'underline-thickness-8', 'underline-thickness-9', 'underline-thickness-10', 'underline-thickness-11', 'underline-thickness-12', 'underline-thickness-13', 'underline-thickness-14', 'underline-thickness-15', 'underline-thickness-16', 'underline-thickness-17', 'underline-thickness-18', 'underline-thickness-19', 'underline-thickness-20'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy mt-60">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>

  <hr>

  <h3 id="offset">Underline offset (<code>text-underline-offset</code>)</h3>
</div>

<?php
  $styles = ['underline-offset-0', 'underline-offset-1', 'underline-offset-2', 'underline-offset-3', 'underline-offset-4', 'underline-offset-5', 'underline-offset-6', 'underline-offset-7', 'underline-offset-8', 'underline-offset-9', 'underline-offset-10', 'underline-offset-11', 'underline-offset-12', 'underline-offset-13', 'underline-offset-14', 'underline-offset-15', 'underline-offset-16', 'underline-offset-17', 'underline-offset-18', 'underline-offset-19', 'underline-offset-20'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy mt-60">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>

  <h4>Negative offsets</h4>
</div>

<?php
  $styles = ['-underline-offset-20', '-underline-offset-19', '-underline-offset-18', '-underline-offset-17', '-underline-offset-16', '-underline-offset-15', '-underline-offset-14', '-underline-offset-13', '-underline-offset-12', '-underline-offset-11', '-underline-offset-10', '-underline-offset-9', '-underline-offset-8', '-underline-offset-7', '-underline-offset-6', '-underline-offset-5', '-underline-offset-4', '-underline-offset-3', '-underline-offset-2', '-underline-offset-1'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>

  <hr>

  <h3 id="color">Underline color (<code>text-decoration-color</code>)</h3>

  <p>Underline colour takes its values from your Tailwind config <code>theme.textColor</code>, <code>theme.borderColor</code> and/or <code>theme.backgroundColor</code> values.</p>
</div>

<?php
  $styles = ['underline-text-title', 'underline-text-primary', 'underline-text-secondary', 'underline-text-accent', 'underline-border-primary', 'underline-border-secondary', 'underline-border-tertiary', 'underline-bg-header', 'underline-bg-banner', 'underline-bg-accent', 'underline-bg-column', 'underline-bg-column-alt'];
  $i = 0;

  foreach ($styles as &$value) {
    echo '<span class="block f-h2 '.($i == 0 ? 'mt-40' : 'mt-20').' underline-solid underline-thickness-2 '.$value.'">'.$value.'</span>';
    $i++;
  }
?>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html"><?php
  $i = 0;

  foreach ($styles as &$value) {
    echo '&lt;span class="underline-solid underline-thickness-2 '.$value.'">'.$value.'&lt;/span>&#13;';
    $i++;
  }
?></code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
