package com.example.Alert.Guard.entity;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "confirmation")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Confirmation {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long confirmationId;
    @OneToOne
    @JoinColumn(name = "user_id")
    private User user;
    private String confirmationToken;
    private boolean confirmed;
}