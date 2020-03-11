*   **insertion_sort**

    Le tri par insertion consiste à parcourir la liste et de placer l'élément à la Nième itération à la bonne place dans le morceau de liste déjà parcourue. 
    On peut le voir comme lorsque l'on trie notre jeu de cartes, on parcourt toutes les cartes du début à la fin tout en les rangeant dans l'ordre.

*  **selection_sort**

    Au contraire du tri par insertion, lors du tri par sélection toute la liste est parcoure afin de trouver le plus petit élément et de l'insé rer au tout début. Puis
    on parcourt une nouvelle fois mais en partant du deuxième élément etc... jusqu'à la fin de la liste.

*  **bubble_sort**

    Son principe est de comparer deux par deux les éléments de la liste ( i1, i2 ), on effectue une permutation si i1 > i2. On réitère jusqu'à ce qu'il n'y est plus de
    permutation possible.

*  **shell_sort**

    Dans le tri par insertion, un élément va à sa place en progressant lentement, case par case. L'accélération consiste à le faire aller à sa place en commençant par faire 
    des grands pas, puis des pas de plus en plus petits, jusqu'à, évidemment, des pas de 1 pour que le tableau soit trié.

*  **merge_sort**

    Pour le tri fusion on divise en deux moitiés la liste à trier. On trie chacune d’entre elles puis on fusionne les deux moitiés obtenues pour reconstituer la liste triée.

*  **quick_sort**

    Lors du tri rapide nous allons chercher une clé pivot dans notre liste T[]. On prend souvent le dernier élément de la liste puis on permute les valeurs de façon à ce
    que toutes celles < à j ,notre pivot, se trouve dans T[0]...T[j] et celles > à j, dans T[j+1]...T[n]. On reproduit récursivement la même manipulation sur T[0]...T[j] puis sur T[j+1]...T[n]

*  **comb_sort**

    Le tri à peigne est une sorte de tri à bulles amélioré, au lieu de comparer deux éléments adjacents on va comparer les éléments plus lointains et réduire l'intervalle progressivement
    jusqu'à arriver à un tri à bulles normal.
    
Pour les tests suivant, les listes à trier contienne 20 éléments.
    
|  | insertion_sort | selection_sort | bubble_sort | merge_sort | quick_sort | comb_sort | shell_sort |
| ------ | ------ | ------ | ------ | ------ | ------ | ------ | ------ |
| Nb comparaison pire des cas | 190 | 190 | 190 | 48 | 190 | 454 | 134 |
| Nb comparaison meilleur des cas | 190 | 190 | 19 | 40 | 190 | 418 | 62 |
| Nb comparaison aléatoire | 190 | 190 | 189 | 63 | 66 | 460 | 128 |

Pour les tests suivant, les listes à trier contienne 100 éléments.
    
|  | insertion_sort | selection_sort | bubble_sort | merge_sort | quick_sort | comb_sort | shell_sort |
| ------ | ------ | ------ | ------ | ------ | ------ | ------ | ------ |
| Nb comparaison pire des cas | 4950 | 4950 | 4950 | 359 | 4950 | 3690 | 1121 |
| Nb comparaison meilleur des cas | 4950 | 4950 | 99 | 316 | 4950 | 3430 | 509 |
| Nb comparaison aléatoire | 4851 | 4851 | 4815 | 515 | 762 | 3824 | 1181 | 