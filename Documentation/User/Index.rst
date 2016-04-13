.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _user-manual:

Users Manual
============

Installing the Plugin
---------------------

On the left side select the module ``WEB > Page``.

Create the page where to output the ``Simple FAQ``. Create a sysfolder, 
where you like to store the FAQ entries.

.. tip::

    It's a good idea to place this folder below the page where you like
    to output the FAQ. By this it is easy to spot the location of the folder.

Insert a new content element into the page. Select ``General Plugin`` in the
wizard. In the tab ``Plugin`` open the dropdown ``Selected Plugin`` and choose
``Simple FAQ``. In the field ``Record Storage Page`` select the sysfolder where
you store the FAQ. 

In the tab ``Genaral`` adjust ``Column``, ``Language`` and ``Header`` as usual.

Creating and Editing the FAQ Entries
------------------------------------

On the left side select the module ``WEB > List``. In the page tree select the
sysfolder where to store the entries. Click the ``Create new record`` icon.
Select ``Simple FAQ > FAQ`` as new record. Edit at least the fields ``Question``
and ``Answer``. Optionally you may add images like known from other content
elements. Save.

Editing, hiding and deleting work as usual.

.. important::

    After all operations on the records flush the FE caches to rebuild the page.

Manually sorting the FAQ Entries
--------------------------------

On the left side select the module ``WEB > List``. In the page tree select the
sysfolder where to store the entries. Below the list mark the checkbox 
``Extended view`` to display the arrow buttons for to sort the entries.
