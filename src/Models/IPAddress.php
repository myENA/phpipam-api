<?php namespace MyENA\PHPIPAMAPI\Models;

use DCarbone\Go\Time;
use MyENA\PHPIPAMAPI\AbstractModel;

/**
 * Class IPAddress
 * @package MyENA\PHPIPAMAPI\Models
 */
class IPAddress extends AbstractModel {
    /** @var int|null */
    private $id = 0;
    /** @var int|null */
    private $subnetId = 0;
    /** @var string|null */
    private $ip_addr = '';
    /** @var int|null */
    private $is_gateway = 0;
    /** @var string|null */
    private $description = '';
    /** @var string|null */
    private $hostname = '';
    /** @var string|null */
    private $mac = '';
    /** @var string|null */
    private $owner = '';
    /** @var int|null */
    private $state = 0;
    /** @var int|null */
    private $switch = 0;
    /** @var int|null */
    private $location = 0;
    /** @var int|null */
    private $port = 0;
    /** @var string|null */
    private $note = '';
    /** @var \DCarbone\Go\Time\Time|null */
    private $lastSeen = null;
    /** @var int|null */
    private $excludePing = 0;
    /** @var int|null */
    private $PTRIgnore = 0;
    /** @var int|null */
    private $PTR = 0;
    /** @var string|null */
    private $firewallAddressObject = '';
    /** @var \DCarbone\Go\Time\Time|null */
    private $editDate = null;

    /**
     * IPAddress constructor.
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->lastSeen = $this->unmarshalDate($this->lastSeen);
        $this->editDate = $this->unmarshalDate($this->editDate);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getSubnetId(): ?int {
        return $this->subnetId;
    }

    /**
     * @return null|string
     */
    public function getIpAddr(): ?string {
        return $this->ip_addr;
    }

    /**
     * @return int|null
     */
    public function getisGateway(): ?int {
        return $this->is_gateway;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * @return null|string
     */
    public function getMac(): ?string {
        return $this->mac;
    }

    /**
     * @return null|string
     */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * @return int|null
     */
    public function getState(): ?int {
        return $this->state;
    }

    /**
     * @return int|null
     */
    public function getSwitch(): ?int {
        return $this->switch;
    }

    /**
     * @return int|null
     */
    public function getLocation(): ?int {
        return $this->location;
    }

    /**
     * @return int|null
     */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * @return null|string
     */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * @return \DCarbone\Go\Time\Time|null
     */
    public function getLastSeen(): ?Time\Time {
        return $this->lastSeen;
    }

    /**
     * @return int|null
     */
    public function getExcludePing(): ?int {
        return $this->excludePing;
    }

    /**
     * @return int|null
     */
    public function getPTRIgnore(): ?int {
        return $this->PTRIgnore;
    }

    /**
     * @return int|null
     */
    public function getPTR(): ?int {
        return $this->PTR;
    }

    /**
     * @return null|string
     */
    public function getFirewallAddressObject(): ?string {
        return $this->firewallAddressObject;
    }

    /**
     * @return \DCarbone\Go\Time\Time|null
     */
    public function getEditDate(): ?Time\Time {
        return $this->editDate;
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $a = get_object_vars($this);
        $a['lastSeen'] = $this->marshalDate($this->lastSeen);
        $a['editDate'] = $this->marshalDate($this->editDate);
        return $a;
    }
}