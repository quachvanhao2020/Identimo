    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Identimo\User", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Identimo\User", mappedBy="parent")
     */
    protected $children;