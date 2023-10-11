{include file="./header.tpl"}
<h1>{$h1}</h1>

<table border="1" width="100%">
    <tr style="background:gray;color:white;font-weight:bold;">
        <td>Nom</td>
        <td>Prénom</td>
    </tr>
{foreach key=k item=line from=$users}
    <tr>
        <td>{$line['nom']}</td>
        <td>{$line['prenom']}</td>
    </tr>
{/foreach}
</table>
{include file="./footer.tpl"}