<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;


class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public string $name;
    public string $email;
    public string $messageText;
    public string $cvPath;

    public function __construct(User $user, string $name, string $email, string $messageText, string $cvPath)
    {
        $this->user = $user;
        $this->name = $name;
        $this->email = $email;
        $this->messageText = $messageText;
        $this->cvPath = $cvPath;
    }

    public function build()
    {
        $fullPath = Storage::disk('public')->path($this->cvPath);

        return $this->subject('Nuova candidatura Revisor')
            ->view('mail.become-revisor')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'messageText' => $this->messageText,
            ])
            ->attach($fullPath, [
                'as' => 'CV-' . $this->name . '.' . pathinfo($fullPath, PATHINFO_EXTENSION),
            ]);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Rendi revisore l'utente".$this->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.become-revisor',
        );
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor',['email =>%user->email']);
        return redirect()->back();
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(
                Storage::disk('public')->path($this->cvPath)
            )->as("CV-{$this->name}.pdf"),
        ];
    }
}
