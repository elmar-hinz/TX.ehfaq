.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _developer-manual:

Developer Manual
================

This usage of this extensions follows the standards of extensions based on
`Extbase` and `FLUID`. You can adjust the FLUID templates a usual, by adding
your template folders to the `TypoScript`.

.. important:

    Important Include the static template into TypoScript named Simple FAQ.

.. important:

    To use the foldout animation a jQuery library needs to be included in the 
    HTML file.

.. _developer-faq:

FAQ
---

How do I set the sys folder with the entries?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

The sys folder with the entries is either selected in the plugins form or can
be set in the TypoScript constants by providing a *Default storage PID*.

How do I set the size of the images?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

The maximum size of the images is set in the TypoScript constants as maximum
width and maximum height. The rest is to be controlled by CSS styles.

Why isn't the JS folding working?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

The JS file depends on `JQuery`. It needs to be included after the `jQuery` 
library. The JS file is included by the TS `page.includeJSFooter` directive.
Typically jQuery would be included by the `page.includeJSFooterlibs.jquery` 
directive to be included before::

    page.includeJSFooterlibs.jquery = path/to/jquery.min.js
    page.includeJSFooter.ehfaq = EXT:ehfaq/Resources/Public/JavaScript/main.js


How do I customize the templates?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

In the TypoScript constants you can set your own template root directories for
templates, partials and layout.

I customized the templates. Why isn't the JS folding working any more?
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

To keep the JS script working your templates must keep the classes in the given
hierarchy, while you can freely customize the HTML tags::

    .tx-ehfaq
        .tx-ehfaq-topic
            .tx-ehfaq-topic-header
            .tx-ehfaq-topic-body
        .tx-ehfaq-topic
            .tx-ehfaq-topic-header
            .tx-ehfaq-topic-body

There must be a parent-child relation between `.tx-ehfaq-topic` and 
`.tx-ehfaq-header`.
