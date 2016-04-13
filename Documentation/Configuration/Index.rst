.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _configuration:

Configuration Reference
=======================

.. _configuration-typoscript:

TypoScript Reference
--------------------

Plugin ehfaq_faq
................

.. only:: html

	.. contents::
		:local:
		:depth: 1

Maximum image height
""""""""""""""""""""

    Property
        maxHeight
    Context
        plugin.tx_ehfaq_faq.settings.images
    Data type
        integer
    Default
        200
    Constant
        $plugin.tx_ehfaq_faq.settings.images.maxHeight
    Description
        Maximum height of images in pixels. Maximum height and maximum width 
        work together so that the proportion of the image is kept.

Maximum image width
"""""""""""""""""""

    Property
        maxWidth
    Context
        plugin.tx_ehfaq_faq.settings.images
    Data type
        integer
    Default
        200
    Constant
        $plugin.tx_ehfaq_faq.settings.images.maxWidth
    Description
        Maximum width of images in pixels. Maximum height and maximum width
        work together so that the proportion of the image is kept.

Path to foldout animation JS file
"""""""""""""""""""""""""""""""""

    Property
        ehfaq
    Context
        page.includeJSFooter
    Data type
        path
    Default
        EXT:ehdistribution/Resources/Public/JavaScript/Vendor/jquery-1.11.2.min.js
    Description
        Path to the JS file that does the foldout animation.
        It depends on the jQuery library, that needs to be included before.

Storage PID of FAQ records
""""""""""""""""""""""""""

    Property
        storagePid
    Context
        plugin.tx_ehfaq_faq.persistence
    Data type
        integer
    Default
        Not set at all.
    Description
        The ID of the sys folder, that keeps the FAQ records.
    Important
        If set, it will overrule the settings in the plugin form even if an
        empty value is provided. This strange behaviour may be caused by a 
        possible bug in the current extbase library and may change in future.

Recurse into sub folders of the storage sys folder
""""""""""""""""""""""""""""""""""""""""""""""""""
    Property
        recursive
    Context
        plugin.tx_ehfaq_faq.persistence
    Data type
        bool
    Default
        0
    Description
        If 1 (true), recurse infinite into sub folders, else the settings of 
        the plugin forms take precedence.
        
Folder with FLUID templates to customize the HTML
"""""""""""""""""""""""""""""""""""""""""""""""""
    Property
        templateRootPaths
    Context
        plugin.tx_ehfaq_faq.view
    Data type
        fallback list of directory paths with integers as keys
    Default
        EXT:ehfaq/Resources/Private/Templates/
    Constant:
        $plugin.tx_ehfaq_faq.view.templateRootPath
    Description
        Directories with a higher key override directories with a lower one.
        The default has the key 0. Filling in the constant will set key 1.
    Example
        ::

            plugin.tx_ehfaq_faq.view.templateRootPaths {
                10 = EXT:myextension/Resources/Private/Templates/
            }

        
Folder with FLUID partials to customize the HTML
""""""""""""""""""""""""""""""""""""""""""""""""
    Property
        partialRootPaths
    Context
        plugin.tx_ehfaq_faq.view
    Data type
        fallback list of directory paths with integers as keys
    Default
        EXT:ehfaq/Resources/Private/Partials/
    Constant:
        $plugin.tx_ehfaq_faq.view.partialRootPath
    Description
        Directories with a higher key override directories with a lower one.
        The default has the key 0. Filling in the constant will set key 1.
    Example
        ::

            plugin.tx_ehfaq_faq.view.partialRootPaths {
                10 = EXT:myextension/Resources/Private/Partials/
            }        

Folder with FLUID layouts to customize the HTML
"""""""""""""""""""""""""""""""""""""""""""""""
    Property
        layoutRootPaths
    Context
        plugin.tx_ehfaq_faq.view
    Data type
        fallback list of directory paths with integers as keys
    Default
        EXT:ehfaq/Resources/Private/Layouts/
    Constant
        $plugin.tx_ehfaq_faq.view.layoutRootPath
    Description
        Directories with a higher key override directories with a lower one.
        The default has the key 0. Filling in the constant will set key 1.
    Example
        ::

            plugin.tx_ehfaq_faq.view.layoutRootPaths {
                10 = EXT:myextension/Resources/Private/Layouts/
            }
