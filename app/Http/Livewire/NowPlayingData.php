<?php

namespace App\Http\Livewire;

use App\Services\ApiService;
use Livewire\Component;

class NowPlayingData extends Component
{
    public $limitPerPage = 1;
    public $data = null;
    public $new = null;

    protected $listeners = [
        'post-data' => 'postData'
    ];

    public function postData()
    {
        $this->limitPerPage = $this->limitPerPage + 1;
        $this->new = ApiService::getNowPlaying($this->limitPerPage);
        foreach($this->new as $item){
            array_push($this->data,$item);
        }

    }

    public function render()
    {
        $this->data = ApiService::getNowPlaying($this->limitPerPage);

        $this->emit('postStore');
        return view('livewire.now-playing-data',[
            'nowPlaying' => $this->data
        ]);
    }
}
