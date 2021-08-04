# Twig Matrix Match plugin for Craft CMS 3.x

A very simple plugin to match the matrix fields handles (camel case) with your templates (hypen format).

This plugin will be useful for you to perform a Layout-Builder system using matrix.

---

After installing this you will be able to do something like this in your entry template to theme up your matrix components:

```
{% set matrixBlocks = entry.yourMatrix.all() %}
{% for block in matrixBlocks %}
  {% set blockType = block.getType().handle %}
  {% include '_components/' ~ blockType | camelToHypens ~ '.html' %}
{% endfor %}
